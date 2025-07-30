<?php
session_start(); // 开启会话

include("db数.php");
// 准备 SQL 查询语句


// 获取并过滤输入，防止SQL注入
$y = isset($_POST['login_username']) ? trim($_POST['login_username']) : '';
$x = isset($_POST['login_password']) ? trim($_POST['login_password']) : '';

// 使用预处理语句防止SQL注入
$stmt = $conn->prepare("SELECT username, password FROM user WHERE username=? AND password=?");
$stmt->bind_param("ss", $y, $x);
$stmt->execute();
$result = $stmt->get_result();


// 检查查询结果是否有数据
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    header("Location: index.html");
    exit;
} else {
    echo "用户或密码错误";
}


// 关闭连接
if (isset($stmt)) {
    $stmt->close();
}
$conn->close();
?>