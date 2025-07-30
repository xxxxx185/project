<?php
include("db数.php");


    // 检查表单数据是否存在
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
        $name =  $_POST['username'];
        $role = $_POST['role']; // 获取注册类型
        $password = $_POST['password'];

        // 准备 SQL 语句，使用占位符防止 SQL 注入
        $stmt = $conn->prepare("INSERT INTO user (username, password,is_admin) VALUES (?, ?,?)");
        $stmt->bind_param('sss', $name, $password, $role);
        $stmt->execute();

        // 注册成功后自动登录
        $_SESSION['username'] = $name;
        $_SESSION['userType'] = ($role === 'admin' || $role === '管理员') ? '管理员' : '普通用户';

        header("Location: index.html");
        exit;
   }
 
  

    // 关闭连接
    $stmt -> close();
// 关闭连接
$conn -> close();
    
?>