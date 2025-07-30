<?php
session_start(); // 开启会话

header('Content-Type: application/json');
$response = [
    'loggedIn' => false,
    'username' => ''
];
if (isset($_SESSION['username'])) {
    $response['loggedIn'] = true;
    $response['username'] = $_SESSION['username'];
    // 增加用户类型字段，未设置时默认为user
    $response['userType'] = isset($_SESSION['userType']) ? $_SESSION['userType'] : 'user';
}
echo json_encode($response);
?>
