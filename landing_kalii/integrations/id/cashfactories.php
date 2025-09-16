<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

$TOKEN_ID = '372-46676fb93a74a07d3845f4f3f9354e98';
$offer_id = $_POST['offer_id'];
$url = "https://cashfactories.com/api/ext/add.json?id=$TOKEN_ID&offer=$offer_id";
$data = $_POST;
$data["ip"] = $_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : ($_SERVER["HTTP_X_FORWARDED_FOR"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"]);
$data["ua"] = $_POST['ua'];
$data["domain"] = $_SERVER["HTTP_X_FORWARDED_HOST"] ? $_SERVER["HTTP_X_FORWARDED_HOST"] : ($_SERVER["HTTP_X_HOST"] ? $_SERVER["HTTP_X_HOST"] : ($_SERVER["HTTP_HOST"] ? $_SERVER["HTTP_HOST"] : $_SERVER["SERVER_NAME"]));
if (isset($data["phonecc"]))
	$data["phone"] = $data["phonecc"] . $data["phone"];
$dataStr = http_build_query($data);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_TIMEOUT, 65);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $dataStr);
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$responseJson = json_decode($response, true);
curl_close($curl);

$status = ($responseJson['status'] === 'ok') ? 'success' : 'error';
$cookies = [
	'httpcode' => $httpcode,
	'response' => $response,
	'pixel' => $_POST['pixel'],
	'ttq' => $_POST['ttq'],
	'language' => $_POST['language'],
	'name' => $_POST['name'],
	'phone' => $_POST['phone'],
	'ordered' => ($status === 'success') ? 1 : 0,
	'status' => $status,
];
foreach ($cookies as $key => $value)
	setcookie($key, $value, time() + 60 * 60 * 24, '/');
writeToLog($data, $httpcode, $response, $status, basename(__FILE__, ".php"));
header("Location: ./success_page/success.php");
