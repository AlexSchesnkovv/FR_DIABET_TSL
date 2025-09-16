<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

function getUserIp()
{
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

function getBrowserLocale()
{
	$accept_language = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : '';
	return mb_substr($accept_language, 0, 2);
}

$data = [
	'api_key' => 'tRX78bA3gCMTTwEf',
	'flow_hash' => '',
	'target_hash' => $_POST['target_hash'],
	'country_code' => $_POST['country'],
	'name' => $_POST['name'],
	'phone' => $_POST['phone'],
	'data1' => '',
	'data2' => $_POST['sub2'],
	'data3' => '',
	'data4' => $_POST['utm_campaign'],
	'clickid' => $_POST['clickid'],
	'ip' => getUserIp(),
	'user_agent' => !empty($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '',
	'referer' => !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '',
	'browser_locale' => getBrowserLocale(),
	'call_language' => 'call_language',
	'address' => 'address',
	'city' => 'city',
];

$curl = curl_init('https://api.aff1.com/v3/lead.create');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
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
// $httpcode = 1;
// $response = 'response';
// $status = 'success';
writeToLog($data, $httpcode, $response, $status, basename(__FILE__, ".php"));
// var_dump($data);
header("Location: ./success_page/success.php");
