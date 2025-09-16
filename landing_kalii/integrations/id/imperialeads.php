<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

$cid = $_POST['subid'];

$serverUrl = $_SERVER['PHP_SELF'];
if (strpos($serverUrl, '?') !== false) {
	$sign = '?';
} else {
	$sign = '&';
}
$landingParam = http_build_query(['cid' => $cid]);
$serverUrl = sprintf(
	'%s%s%s',
	$serverUrl,
	$sign,
	$landingParam
);

$params = [
	'first_name' => $_POST['name'],
	'phone' => $_POST['phone'],
	'x_ip' => $_SERVER['REMOTE_ADDR'],
	'x_ua' => $_SERVER['HTTP_USER_AGENT'],
	'x_url' => $serverUrl,
	'subid' => $cid,
	'sub_id_2' => $_POST['sub2'] ?? '',
	'external_id' => $cid,
	'landing' => 'L1',
	'iso' => $_POST['country'],
	'products' => [
		[
			'name' => $_POST['price'] . ' ' . $_POST['product_name'] . ' ' . $_POST['country'],
			'article' => $_POST['product_article'],
			'price' => $_POST['price'],
			'quantity' => '1',
		],
	],
	'web_id' => '1084_',
];

$url = 'https://imperialeads.com/api/v1/leads/add';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded', 'Authorization: Bearer fvh7Py7M2CccyjuI']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
$response = curl_exec($ch);
$responseJson = json_decode($response, true);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$body = substr($response, $headerSize);
curl_close($ch);

$status = ($responseJson['success'] === 'ok') ? 'success' : 'error';

$cookies = [
	'httpcode' => $httpCode,
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
// $httpCode = 1;
// $response = 'response';
// $status = 'success';
writeToLog($params, $httpCode, $response, $status, basename(__FILE__, ".php"));
// var_dump($params);
header("Location: ./success_page/success.php");
