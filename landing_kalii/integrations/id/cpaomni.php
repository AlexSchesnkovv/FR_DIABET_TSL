<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

const API_URL = 'https://jsapcreate.com/api/User/3.0/createOrder';
const TOKEN = 'kD5MYi0SWMhNKcq6g0sGvW';
const API_KEY = 'g467c3mpwgsO8kiV4NMWaj';

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
	'token' => TOKEN,
	"data" => [
		'special_price' => $_POST['price'],
		'fio' => $_POST['name'],
		'phone' => $_POST['phone'],
		'promo_language' => $_POST['language'],
		'ip' => $_SERVER['REMOTE_ADDR'],
		'product_id' => $_POST['offer_id'],
		'wish_price' => $_POST['old_price'],
		'country' => $_POST['country'],
		'pbid' => $_POST['clickid'],


		'traffic_flow_id' => $_POST['traffic_flow_id'] ?? null,
		'pay_action' => $_POST['pay_action'] ?? null,
		'timezone' => $_POST['timezone'] ?? null,
		'useragent' => $_POST['useragent'] ?? null,
		'visitor_id' => $_POST['visitor_id'] ?? null,
		'promo_info' => $_POST['promo_info'] ?? null,
		'promo_url' => $_POST['promo_url'] ?? null,
		'country_wish_price' => $_POST['country_wish_price'] ?? null,
		'is_phone_mask' => $_POST['is_phone_mask'] ?? null,
		'email' => $_POST['email'] ?? null,

		'utm_source' => $_POST['utm_source'] ?? null,
		'utm_site' => $_POST['utm_site'] ?? null,
		'utm_medium' => $_POST['utm_medium'] ?? null,
		'utm_campaign' => $_POST['utm_campaign'] ?? null,
		'utm_content' => $_POST['utm_content'] ?? null,
		'utm_term' => $_POST['utm_term'] ?? null,
	],

	'dataSign' => API_KEY,
];

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
	"Content-Type: application/json"
]);
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)");
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($curl, CURLOPT_TIMEOUT, 20);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($curl);
if (curl_errno($curl)) {
	echo "cURL Error: " . curl_error($curl);
} else {
	echo "Response:\n" . $response;
}
$responseJson = json_decode($response, true);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

// var_dump($response);

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
// var_dump($cookies);

foreach ($cookies as $key => $value)
	setcookie($key, $value, time() + 60 * 60 * 24, '/');
writeToLog($data, $httpcode, $response, $status, basename(__FILE__, ".php"));
header("Location: ./success_page/success.php");