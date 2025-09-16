<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

$api = [
	'key' => '2134',
	'secret' => 'Dhbyb4gEep7AYuNSHN1Kr2IXwxvTGoyf',
	'flow_url' => 'https://leadrock.com/URL-' . $_POST['flow'],
	'url' => 'https://leadrock.com/api/v2/lead/save'
];

$data = [
	'flow_url' => $api['flow_url'],
	'user_phone' => $_POST['phone'],
	'user_name' => $_POST['name'],
	'other' => $_POST['other'],
	'ip' => $_SERVER['REMOTE_ADDR'],
	'ua' => $_POST['ua'],
	'api_key' => $api['key'],
	'sub1' => $_POST['sub1'],
	'sub2' => $_POST['sub2'],
	'sub3' => $_POST['sub3'],
	'sub4' => $_POST['sub4'],
	'sub5' => $_POST['sub5'],
	'ajax' => 1,
];

$trackUrl = $data['flow_url'] . (strpos($data['flow_url'], '?') === false ? '?' : '&') . http_build_query($data);
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $trackUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
$data['track_id'] = curl_exec($curl);

$data['sign'] = sha1(http_build_query($data) . $api['secret']);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $api['url']);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
$response = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
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
writeToLog($data, $httpcode, $response, $status, basename(__FILE__, ".php"));
header("Location: ./success_page/success.php");
