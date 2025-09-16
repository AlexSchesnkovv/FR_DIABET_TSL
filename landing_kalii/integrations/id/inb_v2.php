<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

$bearer = '12|lMOOUrEfJcwruEjFRIrsKYT6U0eV4Vi7SRHet2Al';
$_POST['phone'] = '+' . preg_replace("/[^0-9]/", "", $_POST['phone']);

$data = array(
	'oid' => $_POST['oid'],
	'name' => substr($_POST['name'], 0, 254),
	'phone' => $_POST['phone'],
	'geo' => $_POST['country'],
	'source_id' => $_POST['offer_id'],
	'scheduled' => false,
	'sub1' => (!empty($_POST['arbitrator_id'])) ? $_POST['arbitrator_id'] : null,
	'lang' => (!empty($_POST['lang'])) ? $_POST['lang'] : 'en',
	'test' => (!empty($_POST['test'])) ? $_POST['test'] : '0',
);

$curl = curl_init();
$CurlOptions = array(
	CURLOPT_HTTPHEADER => ['Content-type: multipart/form-data', 'Cache-Control: no-cache', 'X-INB-Par-Key: Bearer ' . $bearer],
	CURLOPT_URL => 'https://api.inb.bio/r/v1/order/store',
	CURLOPT_POST => true,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_CONNECTTIMEOUT => 3,
	CURLOPT_TIMEOUT => 3,
	CURLOPT_POSTFIELDS => $data
);
curl_setopt_array($curl, $CurlOptions);
$response = curl_exec($curl);
$responseJson = json_decode($response, true);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
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
writeToLog($data, $httpcode, $response, $status, basename(__FILE__, ".php"));
header("Location: ./success_page/success.php");
