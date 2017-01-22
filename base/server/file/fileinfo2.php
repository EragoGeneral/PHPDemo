<?php
$path = "/home/prog/php/sayHello.php";

$filename = basename($path);
$dirname = dirname($path);

echo "完整路径：";
echo $filename;
echo "<br>";
echo "<br>";

echo "其中目录名为：";
echo $dirname;
echo "<br>";
echo "其中文件名为：";
echo $filename;
echo "<br>";

?>