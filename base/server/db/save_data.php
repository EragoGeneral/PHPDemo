<?php
$host="localhost";
$user="root";
$pass="root";

$name = $_POST['user_name'];
$city = $_POST['city'];

if(empty($name) || empty($city)){
    echo '请填写用户名!<a href="save_data.html">返回/a>';
    exit;
}

$conn = mysqli_connect($host, $user, $pass);
if(!$conn){
    die('数据库连接失败!'.mysql_error());
    exit;
}

mysqli_select_db($conn, 'mybatis');
$sql = "insert into teacher(t_name, t_city) values('".$name."', '".$city."') ";
mysqli_query($conn, $sql);
mysqli_close($conn);

echo '数据插入成功， 点击<a href="table_data.php">此处</a>查看数据';

?>
