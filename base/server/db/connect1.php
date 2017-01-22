<?php

$pdo=new PDO('mysql:host=localhost;dbname=mybatis;port=3306','root','root');
$pdo->exec('set names utf8');

$sql="insert into class(c_name, teacher_id) values ('class_c', 1)";
$res=$pdo->exec($sql);
echo '影响行数：'.$res;
//$sql="delete from a1 where Number=5";
//$res=$pdo->exec($sql);
//echo '影响行数：'.$res;

?>