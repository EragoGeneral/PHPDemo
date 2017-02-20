<?php
header("Content-type: image/png");

$height = 200;
$width = 200;

$img = imagecreatetruecolor($width, $height) or die("不支持GD图像处理");
imagepng($img);
imagedestroy($img);
?>