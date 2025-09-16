<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

const API_URL = 'https://api.aray.com/api/v2/order/create/';
const API_KEY = 'ed0489b96f55e208a3b46e0646be58b7';

$data = [
	'api_key' => API_KEY,
	'name' => $_POST['name'],
	'phone' => $_POST['phone'],
	'offer_id' => $_POST['offer_id'],
	'country_code' => $_POST['country'],
	'price' => '0',
	'base_url' => $_SERVER['HTTP_REFERER'],
	'ip' => $_SERVER['REMOTE_ADDR'],
	'referrer' => $_SERVER['HTTP_REFERER'],
	'subacc' => (isset($_POST['sub1'])) ? $_POST['sub1'] : null,
	'subacc2' => (isset($_POST['sub2'])) ? $_POST['sub2'] : null,
	'subacc3' => (isset($_POST['sub3'])) ? $_POST['sub3'] : null,
	'subacc4' => (isset($_POST['sub4'])) ? $_POST['sub4'] : null,
	'utm_campaign' => (isset($_POST['utm_campaign'])) ? $_POST['utm_campaign'] : null,
	'utm_content' => (isset($_POST['utm_content'])) ? $_POST['utm_content'] : null,
	'utm_medium' => (isset($_POST['utm_medium'])) ? $_POST['utm_medium'] : null,
	'utm_source' => (isset($_POST['utm_source'])) ? $_POST['utm_source'] : null,
	'utm_term' => (isset($_POST['utm_term'])) ? $_POST['utm_term'] : null,
	'clickid' => (isset($_POST['subid'])) ? $_POST['subid'] : null,
];

$url = API_URL . '?' . http_build_query($data);
$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_URL => $url,
	CURLOPT_RETURNTRANSFER => true
));

$response = curl_exec($curl);
$responseJson = json_decode($response, true);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

$status = ($responseJson['code'] === 'ok') ? 'success' : 'error';
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
