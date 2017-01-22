<?php
include('file1.php');

echo $str;
echo "<br>";
echo "<br>";

$area = cal_area($rad);
echo "在file1中计算半径为".$rad."的圆面积是".$area;
?>