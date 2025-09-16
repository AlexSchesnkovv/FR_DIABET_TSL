<?php
  require_once './lib/checker.php';
  require_once './lib/logger.php';
  $apiKey = 'e1c918e7a7af0d8b3820ab440e49949b';
  $data = json_encode(
  	[
  		'flow_uuid' => $_POST['offer_id'],
  		'country_code' => $_POST['country'],
  		'phone' => $_POST['phone'],
  		'name' => $_POST['name'],
  		'ip' => $_SERVER['REMOTE_ADDR'],
  		'sub_id1' => $_POST['sub1'] ?? NULL,
  		'sub_id2' => $_POST['sub2'] ?? NULL,
  	]
  );
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.affstar.com/api/lead/create/publisher");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json', 'ApiKey:' . $apiKey]);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  $response = curl_exec($ch);
  $responseJson = json_decode($response, true);
  $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);
  
  $status = ($responseJson['success'] === true) ? 'success' : 'error';
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
  writeToLog(json_decode($data, true), $httpcode, $response, $status, basename(__FILE__, ".php"));
  header("Location: ./success_page/success.php");
  // var_dump($data);
