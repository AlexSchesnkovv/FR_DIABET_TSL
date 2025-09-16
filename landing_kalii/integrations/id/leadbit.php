<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

$token = '_68a5d9c48ac01544875015';

$data = array(
	'flow_hash' => $_POST['target_hash'],
	'landing' => $_POST['landing'] ?? null,
	'referrer' => $_SERVER['HTTP_REFERER'],
	'phone' => $_POST['phone'],
	'name' => $_POST['name'],
	'country' => $_POST['country'],
	'address' => $_POST['address'] ?? null,
	'email' => $_POST['email'] ?? null,
	'lastname' => $_POST['lastname'] ?? null,
	'comment' => $_POST['comment'] ?? null,
	'layer' => $_POST['layer'] ?? null,
	'ip' => $_SERVER['REMOTE_ADDR'],
	'sub1' => $_POST['sub1'] ?? null,
	'sub2' => $_POST['sub2'] ?? null,
	'sub3' => $_POST['sub3'] ?? null,
	'sub4' => $_POST['sub4'] ?? null,
	'sub5' => $_POST['sub5'] ?? null,
);
$url = 'http://wapi.leadbit.com/api/new-order/' . $token;

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($curl, CURLOPT_REFERER, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$response = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$responseJson = json_decode($response, true);
curl_close($curl);

$status = ($responseJson['status'] === 'success') ? 'success' : 'error';
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
//$httpcode = 1;
//$response = 'response';
//$status = 'success';
writeToLog($data, $httpcode, $response, $status, basename(__FILE__, ".php"));
// var_dump($data);
header("Location: ./success_page/success.php");
