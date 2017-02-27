<?php
header('content-type:image/png'); // 定义标题png格式图像
$im = imagecreate(65, 25); // 定义画布
imagefill($im, 0, 0, imagecolorallocate($im, 200, 200, 200)); // 区域填充
$validatorCode = $_GET['code']; // 获取提交的值
imagestring($im, rand(3, 5), 10, 3, substr($validatorCode, 0, 1), imagecolorallocate($im, 0, rand(0, 255), rand(0, 255)));
imagestring($im, rand(3, 5), 25, 6, substr($validatorCode, 1, 1), imagecolorallocate($im, rand(0, 255), 0, rand(0, 255)));
imagestring($im, rand(3, 5), 36, 9, substr($validatorCode, 2, 1), imagecolorallocate($im, rand(0, 255), rand(0, 255), 0));
imagestring($im, rand(3, 5), 48, 12, substr($validatorCode, 3, 1), imagecolorallocate($im, 0, rand(0, 255), rand(0, 255)));
for ($i = 0; $i < 200; $i ++) { // 填充干扰背景
    imagesetpixel($im, rand() % 70, rand() % 30, imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255)));
}
imagepng($im); // 生成PNG图像
imagedestroy(); // 销毁图像
?>