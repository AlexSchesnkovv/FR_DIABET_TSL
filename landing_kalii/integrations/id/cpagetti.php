<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

$uri = 'http://api.cpagetti.com/order/register';
$data = [
	'api_key' => '7bMt9DOZLxIVjMb8fUZBGa0WMA8ja4F1',
	'name' => $_POST['name'],
	'phone' => $_POST['phone'],
	'offer_id' => $_POST['offer_id'],
	'stream_code' => $_POST['target_hash'],
	'country' => $_POST['country'],
	'lang' => $_POST['language'],
	'ip' => (!empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null),
	'sub1' => $_POST['sub1'],
	'sub2' => $_POST['sub2'],
	'sub3' => NULL,
	'sub4' => NULL,
	'sub5' => NULL,
];
$headers = [
	"Host" => $uri,
	"User-Agent" => (!empty($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null),
	"Accept" => (!empty($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : null),
	"Accept-Language" => (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : null),
	"Keep-Alive" => '15',
	"Connection" => "keep-alive",
	"Referer" => (!empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null),
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_URL, $uri);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$responseJson = json_decode($response, true);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

$status = ($responseJson['success'] === true) ? 'success' : 'error';
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
