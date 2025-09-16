<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
	$ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
} elseif (!empty($_SERVER['HTTP_X_REAL_IP'])) {
	$ip = $_SERVER['HTTP_X_REAL_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}

$data = array(
	'campaign_id' => $_POST['target_hash'],
	'ip' => $ip,
	'name' => $_POST['name'],
	'phone' => $_POST['phone'],
	'country_code' => $_POST['country'],
	'sid2' => $_POST['sub2'],
	'sid5' => $_POST['subid'],
);

$data['is_smart_form'] = true;

$ips = explode(",", $ip);
$data['ip'] = trim($ips[0]);

$parsed_referer = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_QUERY);
parse_str($parsed_referer, $referer_query);

$curl = curl_init();
$submit_url = 'https://tracker.everad.com/conversion/new';

curl_setopt($curl, CURLOPT_URL, $submit_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array_merge($referer_query, $data)));
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

$response = curl_exec($curl);
$responseJson = json_decode($response, true);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

$status = ($responseJson['ok'] === true) ? 'success' : 'error';
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
