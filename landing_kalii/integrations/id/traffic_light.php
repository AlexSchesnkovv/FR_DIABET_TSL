<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

$apiKey = 'CMKgjgUSl2oMtuztevUrYFjJoQJlp1Q78693IUDz5MFL7M2WNg6';
$apiUrl = 'http://api.cpa.tl/api/lead/send';

$data = array(
	'key' => $apiKey,
	'id' => microtime(true),
	'offer_id' => $_POST['offer_id'],
	'stream_hid' => $_POST['target_hash'],
	'name' => $_POST['name'],
	'phone' => $_POST['phone'],
	'comments' => $_POST['comments'] ?? NULL,
	'country' => $_POST['country'],
	'address' => $_POST['address'] ?? NULL,
	'tz' => $_POST['timezone_int'] ?? NULL,
	'web_id' => '',
	'ip_address' => isset($_SERVER["HTTP_CF_CONNECTING_IP"]) ? $_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER['REMOTE_ADDR'],
	'user_agent' => $_SERVER['HTTP_USER_AGENT'],

	"utm_source" => $_POST['utm_source'] ?? NULL,
	"utm_medium" => $_POST['utm_medium'] ?? NULL,
	"utm_campaign" => $_POST['utm_campaign'] ?? NULL,
	"utm_content" => $_POST['utm_content'] ?? NULL,
	"utm_term" => $_POST['utm_term'] ?? NULL,

	"sub1" => $_POST['sub1'] ?? NULL,
	"sub2" => $_POST['sub2'] ?? NULL,
	"sub3" => $_POST['sub3'] ?? NULL,
	"sub4" => $_POST['sub4'] ?? NULL,
	"sub5" => $_POST['sub5'] ?? NULL,
);

$options = array(
	'http' => array(
		'header' => "Content-type: application/x-www-form-urlencoded\r\n",
		'method' => 'POST',
		'content' => http_build_query($data),
		'ignore_errors' => true,
	)
);

$context = stream_context_create($options);
$response = file_get_contents($apiUrl, false, $context);
$obj = json_decode($response);
$httpcode = '';

$status = (($obj !== null) && (empty($obj->errmsg))) ? 'success' : 'error';
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
