<?php
header( "Content-Type:text/html; charset=UTF-8 ");
//定义输出图像类型
header("content-type:image/jpeg");
//载入照片
$im = imagecreatefromjpeg("img/tower.jpg");
//设置字段颜色为蓝色
$textcolor = imagecolorallocate($im, 56, 73, 136);
//定义字体 
$fnt = "font/MSYHBD.TTF";
//定义输出字体串
$text = iconv("GBK", "UTF-8", "灯塔");
//echo $text;

//写TTF文字到图中
imagettftext($im, 28, 0, 100, 60, $textcolor, $fnt, $text);  
//建立 jpeg 图形
imagejpeg($im);
//释放资源
imagedestroy($im);

?>