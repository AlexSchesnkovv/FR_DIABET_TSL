<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

const API_URL = 'https://api.kma.biz/lead/add';
const API_KEY = 'fry3oWy3ajIj1IR9u-qPKrB-LKFIMAjH';

$data = [
	'api_key' => API_KEY,
	'ip' => $_SERVER['REMOTE_ADDR'],
	'referer' => $_SERVER['HTTP_REFERER'],

	'channel' => $_POST['target_hash'],
	'name' => $_POST['name'],
	'phone' => $_POST['phone'],
	'country' => $_POST['country'],

	'data1' => $_POST['subid'],
	'data2' => $_POST['sub2'],
	'data3' => $_POST['sub3'],
	'data4' => $_POST['sub4'],
	'data5' => $_POST['sub5'],

	'is_mobile' => $_POST['is_mobile'] ?? NULL,
	'language' => $_POST['language'],
];

$url = API_URL;

$headers = [
	'Authorization: Bearer ' . API_KEY,
	'Content-Type: application/x-www-form-urlencoded'
];

$process = curl_init();
curl_setopt($process, CURLOPT_HEADER, 0);
curl_setopt($process, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)");
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($process, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($process, CURLOPT_TIMEOUT, 20);
curl_setopt($process, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($process, CURLOPT_POST, true);
curl_setopt($process, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($process, CURLOPT_HTTPHEADER, $headers);
curl_setopt($process, CURLOPT_URL, $url);

$response = curl_exec($process);
$responseJson = json_decode($response, true);
$httpcode = curl_getinfo($process, CURLINFO_HTTP_CODE);
curl_close($process);

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