<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

const WEBMASTER_TOKEN = '8346a9bb0ef02f3987ac05d480558877';

function getUserIP()
{
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }

    return $ip;
}

$data = array(
    'name' => $_POST['name'],
    'phone' => $_POST['phone'],
    'offerId' => $_POST['offer_id'],
    'domain' => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],
    'ip' => getUserIp(),
    'utm_campaign' => $_POST['utm_campaign'],
    'utm_content' => $_POST['sub2'],
    'clickid' => $_POST['subid'],
);

$dataJson = json_encode($data);
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://sendmelead.com/api/v3/lead/add',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $dataJson,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($dataJson),
        'X-Token: ' . WEBMASTER_TOKEN,
    ),
));

$response = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$responseJson = json_decode($response, true);
curl_close($curl);

$status = ($responseJson['result'] === 'ok') ? 'success' : 'error';
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
