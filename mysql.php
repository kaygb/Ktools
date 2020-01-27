<?php
include_once('config.php');
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
// 使用 sql 创建数据表
$sql = "create table wp_jc_count(
    id int not null auto_increment primary key,
    ip varchar(20) not null,
    times int default 0
    );";
 
if ($conn->query($sql) === TRUE) {
    echo "数据表创建成功";
} else {
    echo "数据表已创建或创建数据表错误: " . $conn->error;
    echo "<br><a href=\"//".constant("TOOLS_URL")."\">返回首页</a>";
}
 
$conn->close();
?>