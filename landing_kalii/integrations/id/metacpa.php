<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

function getClientIP()
{
	if (getenv('HTTP_CLIENT_IP')) {
		$ip = getenv('HTTP_CLIENT_IP');
	} elseif (getenv('HTTP_X_FORWARDED_FOR')) {
		$ip = getenv('HTTP_X_FORWARDED_FOR');
	} elseif (getenv('HTTP_X_FORWARDED')) {
		$ip = getenv('HTTP_X_FORWARDED');
	} elseif (getenv('HTTP_FORWARDED_FOR')) {
		$ip = getenv('HTTP_FORWARDED_FOR');
	} else if (getenv('HTTP_FORWARDED')) {
		$ip = getenv('HTTP_FORWARDED');
	} elseif (getenv('REMOTE_ADDR')) {
		$ip = getenv('REMOTE_ADDR');
	}
	return $ip;
}

$url = 'http://metacpa.ru/create';
$data = array(
	'phone' => $_POST['phone'],
	'name' => $_POST['name'],
	'ip' => getClientIP(),
	'flow_id' => $_POST['offer_id'],
	'geo' => $_POST['country'],
);
foreach ($_POST as $key => $value) {
	$data[$key] = $value;
}
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_TIMEOUT, 5);
curl_setopt($curl, CURLOPT_URL, $url . '?' . http_build_query($data));
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
//var_dump($data);
header("Location: ./success_page/success.php");
