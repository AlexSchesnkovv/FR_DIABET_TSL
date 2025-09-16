<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	$ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} elseif (!empty($_SERVER['REMOTE_ADDR'])) {
	$ip = $_SERVER['REMOTE_ADDR'];
} else {
	$ip = null;
}
if (strpos($ip, ',') !== false) {
	$ip = substr($ip, 0, strpos($ip, ','));
}

$data = [
	'country' => !empty($_POST['country']) ? $_POST['country'] : null,
	'stream_key' => $_POST['target_hash'],

	'name' => $_POST['name'],
	'phone' => $_POST['phone'],
	'ip' => $ip,
	'tz' => !empty($_POST['tz']) ? $_POST['tz'] : null,
	'address' => !empty($_POST['address']) ? $_POST['address'] : null,
	'city' => !empty($_POST['city']) ? $_POST['city'] : null,
	'zip' => !empty($_POST['zip']) ? $_POST['zip'] : null,
	'email' => !empty($_POST['email']) ? $_POST['email'] : null,
	'password' => !empty($_POST['password']) ? $_POST['password'] : null,
	'product_id' => !empty($_POST['product_id']) ? $_POST['product_id'] : null,
	'order' => !empty($_POST['order']) ? $_POST['order'] : null,
	'comment' => !empty($_POST['comment']) ? $_POST['comment'] : null,
	'user_agent' => $_SERVER['HTTP_USER_AGENT'],

	'utm_source' => !empty($_POST['utm_source']) ? $_POST['utm_source'] : null,
	'utm_medium' => !empty($_POST['utm_medium']) ? $_POST['utm_medium'] : null,
	'utm_campaign' => !empty($_POST['utm_campaign']) ? $_POST['utm_campaign'] : null,
	'utm_term' => !empty($_POST['utm_term']) ? $_POST['utm_term'] : null,
	'utm_content' => !empty($_POST['utm_content']) ? $_POST['utm_content'] : null,

	'sub_id' => !empty($_POST['subid']) ? $_POST['subid'] : null,
	'sub_id_1' => !empty($_POST['sub1']) ? $_POST['sub1'] : null,
	'sub_id_2' => !empty($_POST['sub2']) ? $_POST['sub2'] : null,
	'sub_id_3' => !empty($_POST['sub3']) ? $_POST['sub3'] : null,
	'sub_id_4' => !empty($_POST['sub4']) ? $_POST['sub4'] : null,

	'click_id' => !empty($_POST['click_id']) ? $_POST['click_id'] : null,

	'referrer' => !empty($_POST['referrer']) ? $_POST['referrer'] : null,

	'landing_url' => !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null,
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://app.cpaecom.com/api/leads');
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$responseJson = json_decode($response, true);
curl_close($curl);

$status = isset($responseJson['lead_id']) ? 'success' : 'error';
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
