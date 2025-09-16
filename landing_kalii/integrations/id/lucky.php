<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

define('TOKEN', '68a5eb66dd9b4946040371875114');

$ip = $_SERVER['REMOTE_ADDR']; // *
$name = $_POST['name']; // *
$phone = $_POST['phone']; // *
$campaign_hash = $_POST['target_hash']; // *
$country = $_POST['country']; // *
$userAgent = $_POST['ua']; // *
$utm_source = $_POST['utm_source'];
$utm_content = $_POST['utm_content'];
$utm_campaign = $_POST['utm_campaign'];
$utm_term = $_POST['utm_term'];
$utm_medium = $_POST['utm_medium'];
$subid = $_POST['subid'];
$subid1 = $_POST['sub1'];
$subid2 = $_POST['sub2'];
$subid3 = $_POST['sub3'];

$data = [
	'campaign_hash' => $_POST['target_hash'],
	'ip' => $ip,
	'name' => $name,
	'phone' => $phone,
	'user_agent' => $userAgent,
	'country' => $country,
	'subid' => $subid,
	'subid1' => $subid1,
	'subid2' => $subid2,
	'subid3' => $subid3,
	'utm_source' => $utm_source,
	'utm_content' => $utm_content,
	'utm_campaign' => $utm_campaign,
	'utm_term' => $utm_term,
	'utm_medium' => $utm_medium
];


$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://lucky.online/api/v1/lead-create/webmaster?api_key=' . TOKEN);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$responseJson = json_decode($response, true);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

$status = ($responseJson['response']['status'] === 'success') ? 'success' : 'error';
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
