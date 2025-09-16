<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo '<h1>405 Method Not Allowed</h1>';
    http_response_code(405);
    header('Allow: POST');
    exit;
}

if (empty($_POST['name']) || empty($_POST['phone'])) {
    $status = 'error';
    $cookies = [
        'httpcode' => "",
        'response' => "",
        'language' => $_POST['language'],
        'name' => $_POST['name'],
        'phone' => $_POST['phone'],
        'status' => $status,
    ];
    foreach ($cookies as $key => $value) setcookie($key, $value, time() + 60 * 60 * 24, '/');
    header("Location: ./success_page/success.php");
    exit;
}

if (($_COOKIE['ordered']) && ($_COOKIE['name'] === $_POST['name']) && ($_COOKIE['phone'] === $_POST['phone'])) {
    $status = 'double';
    $cookies = [
        'httpcode' => "",
        'response' => "",
        'language' => $_POST['language'],
        'name' => $_POST['name'],
        'phone' => $_POST['phone'],
        'status' => $status,
    ];
    foreach ($cookies as $key => $value) setcookie($key, $value, time() + 60 * 60 * 24, '/');
    header("Location: ./success_page/success.php");
    exit;
}
