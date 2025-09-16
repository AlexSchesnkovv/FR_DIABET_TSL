<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

const API_KEY = 'f5b7ed7e59c147249d385bfdbe8fa94d';

if (isset($_SERVER['HTTP_CLIENT_IP'])) {
	$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
} else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
	$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
} else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
	$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
} else if (isset($_SERVER['HTTP_FORWARDED'])) {
	$ipaddress = $_SERVER['HTTP_FORWARDED'];
} else if (isset($_SERVER['REMOTE_ADDR'])) {
	$ipaddress = $_SERVER['REMOTE_ADDR'];
} else {
	$ipaddress = 'UNKNOWN';
}

$data = array(
	'goods_id' => $_POST['offer_id'],
	'ip' => $ipaddress,
	'msisdn' => $_POST['phone'],
	'name' => $_POST['name'],
	'country' => $_POST['country'],
	'domain' => $_SERVER['SERVER_NAME'],
);

if (isset($_POST['sub1'])) {
	$data['url_params[sub1]'] = $_POST['sub1'];
}
if (isset($_POST['sub2'])) {
	$data['url_params[sub2]'] = $_POST['sub2'];
}
if (isset($_POST['sub3'])) {
	$data['url_params[sub3]'] = $_POST['sub3'];
}
if (isset($_POST['sub4'])) {
	$data['url_params[sub4]'] = $_POST['sub4'];
}
if (isset($_POST['sub5'])) {
	$data['url_params[sub5]'] = $_POST['sub5'];
}
if (isset($_POST['utm_source'])) {
	$data['url_params[utm_source]'] = $_POST['utm_source'];
}
if (isset($_POST['utm_content'])) {
	$data['url_params[utm_content]'] = $_POST['utm_content'];
}
if (isset($_POST['utm_term'])) {
	$data['url_params[utm_term]'] = $_POST['utm_term'];
}
if (isset($_POST['utm_campaign'])) {
	$data['url_params[utm_campaign]'] = $_POST['utm_campaign'];
}
if (isset($_POST['stats_uuid'])) {
	$data['session_id'] = $_POST['stats_uuid'];
}

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api-new.leadreaktor.com/api/order/create.php?api_key=" . API_KEY);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($curl);
$responseJson = json_decode($response, true);
$httpcode = $responseJson['status_code'];
curl_close($curl);

$status = ($httpcode === 200) ? 'success' : 'error';
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
