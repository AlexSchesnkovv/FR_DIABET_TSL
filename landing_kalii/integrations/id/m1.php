<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

const API_URL = 'http://m1.top/send_order/';
const API_KEY = '4eef89ad8b9e029fd04cbb676fb8644b';

if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
	$ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
} elseif (!empty($_SERVER['HTTP_X_REAL_IP'])) {
	$ip = $_SERVER['HTTP_X_REAL_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}

$data = [
	'ref' => 1026085,
	'api_key' => API_KEY,
	'product_id' => $_POST['offer_id'],
	'phone' => $_POST['phone'],
	'name' => $_POST['name'],
	'ip' => $_SERVER['REMOTE_ADDR'],
	'langCode' => $_POST['country'],
	's' => $_POST['sub1'],
	'w' => 'test_w',
	't' => $_POST['sub2'],
	'p' => 'test_p',
	'm' => 'test_m'
];

$url = API_URL;

$data['langCode'] = '';

foreach ($_POST as $key => $value) {
	$data[$key] = $value;
}

$process = curl_init();
curl_setopt($process, CURLOPT_HEADER, 0);
curl_setopt($process, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)");
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($process, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($process, CURLOPT_TIMEOUT, 20);
curl_setopt($process, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($process, CURLOPT_POST, true);
curl_setopt($process, CURLOPT_POSTFIELDS, $data);
curl_setopt($process, CURLOPT_URL, $url);

$response = curl_exec($process);
$responseJson = json_decode($response, true);
$httpcode = curl_getinfo($process, CURLINFO_HTTP_CODE);
curl_close($process);

$status = ($responseJson['result'] === 'ok') ? 'success' : 'error';

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