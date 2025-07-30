<?php
// 开启会话
session_start();

// 清除所有会话变量
$_SESSION = array();

// 如果要清除服务器上的会话 cookie，将会话 cookie 的过期时间设置为之前的一个时间点
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

// 销毁会话
session_destroy();

// 重定向到登录页面或其他页面
header('Location: index.html'); // 替换为您的登录页面的 URL 或其他页面的 URL
exit;
?>
