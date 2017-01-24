<?php
$host = '127.0.0.1';
$user_name = 'root';
$password = 'root';

$conn = mysqli_connect($host, $user_name, $password);

if(!$conn){
    die('数据库连接失败: '.mysql_error());
}

echo "数据库连接成功!";

mysqli_select_db($conn, "mybatis");

$sql = "select c_id, c_name, teacher_id from class";
$result = mysqli_query($conn, $sql);

if($result){
    echo 'SQL语句：'.$sql.'<br/>已经成功执行！';
    $num = mysqli_num_rows($result);
    echo '<br/>该SQL语句查询到<b>'.$num.'</b>行数据';
}

if(mysqli_close($conn)){
    echo "<br/>......<br/><br/>";
    echo "数据库连接已经成功关闭";
}

?>