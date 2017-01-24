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

$sql = 'select c_id, c_name, teacher_id from class';
$result = mysqli_query($conn, $sql) OR die("<br/>ERROR:<b>".mysqli_error()."</b><br/>产生问题的SQL: ".$sql);

if($num=mysqli_num_rows($result)){
    echo '<pre>';
    while($row = mysqli_fetch_array($result)){
        print_r($row);
    }
}

?>












?>