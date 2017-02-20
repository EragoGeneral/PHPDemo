<?php
header("Content-type: image/png");
$im = imagecreate(400, 250) or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 255, 255);
//$text_color = imagecolorallocate($im, 0, 255, 255);
//imagestring($im, 10, 15, 15, "A Simple Text String", $text_color);
imagegif($im);
imagedestroy($im);
?>