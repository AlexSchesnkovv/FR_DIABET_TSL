<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

$apiKey = '40187e6e19922001bf3188a3d8f79356';

$url = "http://shakes.pro?r=/api/order/in&key=$apiKey";
$data = [
	'comment' => (!empty($_POST['comment']) ? $_POST['comment'] : ''),
	'createdAt' => date('Y-m-d H:i:s'),
	'ip' => (!empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null),
	'name' => (!empty($_POST['name']) ? $_POST['name'] : ''),
	'phone' => (!empty($_POST['phone']) ? $_POST['phone'] : ''),
	'referrer' => (!empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null),
	'userAgent' => (!empty($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '-'),
	'landingUrl' => $_POST['landing_url'],
	'offerId' => $_POST['offer_id'],
	'streamCode' => $_POST['target_hash'],
	'countryCode' => (!empty($_POST['country']) ? $_POST['country'] : ''),
	'sub1' => (!empty($_POST['sub1']) ? $_POST['sub1'] : ''),
	'sub2' => (!empty($_POST['sub2']) ? $_POST['sub2'] : ''),
	'sub3' => (!empty($_POST['sub3']) ? $_POST['sub3'] : ''),
	'sub4' => (!empty($_POST['sub4']) ? $_POST['sub4'] : ''),
	'sub5' => (!empty($_POST['sub5']) ? $_POST['sub5'] : ''),
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$responseJson = json_decode($response, true);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
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
// $httpcode = 1;
// $response = 'response';
// $status = 'success';
writeToLog($data, $httpcode, $response, $status, basename(__FILE__, ".php"));
// var_dump($data);
header("Location: ./success_page/success.php");