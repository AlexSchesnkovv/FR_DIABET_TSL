<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

$data = array();
foreach ($_POST as $key => $value) {
    if ($value != '') {
        $data[$key] = $value;
    }
}

$data['is_smart_form'] = true;

if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
    $ip =  $_SERVER['HTTP_CF_CONNECTING_IP'];
} elseif (!empty($_SERVER['HTTP_X_REAL_IP'])) {
    $ip =  $_SERVER['HTTP_X_REAL_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip =  $_SERVER['REMOTE_ADDR'];
}

$ips = explode(',', $ip);
$data['ip'] = trim($ips[0]);

$parsed_referer = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_QUERY);
parse_str($parsed_referer, $referer_query);

$curl = curl_init();
$submit_url = 'https://tracker.rocketprofit.com/conversion/new';
curl_setopt($curl, CURLOPT_URL, $submit_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST,           1);
curl_setopt($curl, CURLOPT_POSTFIELDS,     http_build_query(array_merge($referer_query, $data)));
curl_setopt($curl, CURLOPT_HTTPHEADER,     array('Content-Type: application/x-www-form-urlencoded'));
$response = curl_exec($curl);
$responseJson = json_decode($response, true);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

$status = isset($responseJson['id']) ? 'success' : 'error';
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
foreach ($cookies as $key => $value) setcookie($key, $value, time() + 60 * 60 * 24, '/');
writeToLog($data, $httpcode, $response, $status, basename(__FILE__, ".php"));
header("Location: ./success_page/success.php");
