<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

$token = '2664-21f0a48cece7992d7e25734bc5bc92bb';

if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
	$ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
} elseif (!empty($_SERVER['HTTP_X_REAL_IP'])) {
	$ip = $_SERVER['HTTP_X_REAL_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}

$headers = [
	'Content-Type: application/json',
];

$data = [
	'id' => 'auto',
	'ip' => $ip,
	'country' => $_POST['country'],
	'offer' => $_POST['offer_id'],
	'flow' => $_POST['target_hash'],
	'phone' => $_POST['phone'],
	'name' => $_POST['name'],
	'subid' => $_POST['subid'],
	'sub2' => $_POST['sub2'],
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://api.offer.store/wm/push.json?id=' . $token);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_HEADER, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
$body = substr($response, $header_size);
$responseJson = json_decode($body, true);
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
