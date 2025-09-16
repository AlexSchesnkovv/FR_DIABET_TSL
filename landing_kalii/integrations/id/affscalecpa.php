<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

$apikey = '7b9590d3eea487f0ec97d43e2c92c0b5574f5995';

function check($str = '')
{
    if (is_int($str)) {
        $str = intval($str);
    } else {
        $str = htmlspecialchars($str);
        $str = stripslashes(trim($str));
    }

    return $str;
}

$data = array(
    'goal_id' => $_POST['offer_id'],
    'firstname' => (!empty($_POST['name'])) ? check($_POST['name']) : '',
    'phone' => (!empty($_POST['phone'])) ? check($_POST['phone']) : '',
    'aff_click_id' => (!empty($_POST['aff_click_id'])) ? check($_POST['aff_click_id']) : '',
    'custom1' => (!empty($_POST['custom1'])) ? check($_POST['custom1']) : '',
    'sub_id1' => (!empty($_POST['sub_id1'])) ? check($_POST['sub_id1']) : '',
    'sub_id2' => (!empty($_POST['sub_id2'])) ? check($_POST['sub_id2']) : '',
    'sub_id3' => (!empty($_POST['sub_id3'])) ? check($_POST['sub_id3']) : '',
    'sub_id4' => (!empty($_POST['sub_id4'])) ? check($_POST['sub_id4']) : '',
    'sub_id5' => (!empty($_POST['sub_id5'])) ? check($_POST['sub_id5']) : '',
    'aff_param1' => (!empty($_POST['aff_param1'])) ? check($_POST['aff_param1']) : $_SERVER['HTTP_HOST'] ?? null,
    'aff_param2' => (!empty($_POST['aff_param2'])) ? check($_POST['aff_param2']) : $_SERVER['REMOTE_ADDR'] ?? null,
    'aff_param3' => (!empty($_POST['aff_param3'])) ? check($_POST['aff_param3']) : '',
    'aff_param4' => (!empty($_POST['aff_param4'])) ? check($_POST['aff_param4']) : '',
    'aff_param5' => (!empty($_POST['aff_param5'])) ? check($_POST['aff_param5']) : '',
);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://tracking.affscalecpa.com/api/v2/affiliate/leads?api-key=' . $apikey);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($curl);
$responseJson = json_decode($response, true);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

$status = ($responseJson['code'] === 200) ? 'success' : 'error';
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
