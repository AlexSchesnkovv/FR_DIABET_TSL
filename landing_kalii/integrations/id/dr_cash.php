<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

$token = 'ZGIWMJRHZMUTMDRLZC00NDVJLTK0MJUTMJI5YJZKYMM2YJZI';
$stream_code = $_POST['target_hash'];

$headers = [
	'Content-Type: application/json',
	'Authorization: Bearer ' . $token
];

$data = [
	'stream_code' => $stream_code,
	'client' => [
		'phone' => $_POST['phone'],
		'name' => $_POST['name'],
	],
	'sub1' => $_POST['sub1'],
	'sub2' => $_POST['sub2'],
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://affiliate.drcash.sh/v1/order');
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

$status = (isset($responseJson['uuid'])) ? 'success' : 'error';
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
