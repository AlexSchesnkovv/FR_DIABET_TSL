<?php
  require_once './lib/checker.php';
  require_once './lib/logger.php';
  
  $api_key = "5b06686ad8";
  $publisher_id = "2884";
  $api_url = "https://api.ezaff.com/send";
  
  $post = array(
       'offer_id' => $_POST['offer_id'],
       'publisher_id' => $publisher_id,
       'api_key' => $api_key,
       'name' => $_POST['name'],
       'phone' => $_POST['phone'],
       'click_id' => $_POST['sub1'],
       'publisher_sub_id' => $_POST['sub2'],
       'country' => $_POST['country'],
       'ref_url' => $_SERVER['HTTP_HOST'],
  );
  $ch = curl_init($api_url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  $obj = json_decode($response, true);
  //var_dump($obj);
  if ($obj['status'] == 'success') {
    $status = ($obj['status'] === 'success') ? 'success' : 'error';
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
  }
  
  foreach ($cookies as $key => $value) setcookie($key, $value, time() + 60 * 60 * 24, '/');
  writeToLog($post, $httpcode, $response, $status, basename(__FILE__, ".php"));
  header("Location: ./success_page/success.php");