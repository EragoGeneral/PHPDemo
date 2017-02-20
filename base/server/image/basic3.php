<?php
header("Content-type: image/png");

$im = imagecreate(200, 60);
$white = imagecolorallocate($im, 225, 66, 159);
imagegif($im);
imagedestroy($im);
?>