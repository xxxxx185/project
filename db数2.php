<?php
// 数据库连接参数
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "web";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 获取评论内容
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['comment'])) {
    $comment = $_POST["comment"];

    // 将评论插入到数据库中
    $sql = "INSERT INTO comments (username,comment_text) VALUES ('f','$comment')";
    if ($conn->query($sql) === TRUE) {
        // 提交成功后重新加载评论
       
        header("Location: course.html");
        exit;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "评论内容未提供";
}


// 关闭数据库连接
$conn->close();
?>