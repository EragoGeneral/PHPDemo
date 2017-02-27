<?php

// request url: http://localhost:8082/PHPDemo/base/server/image/verifyCode.php?num=WT6b

header("content-type:image/png");            //生成验证码
$num = $_GET['num'];//获取传递的变量值
$imagewidth=60;//设定图像宽度
$imageheight=18;//高度
$numimage = imagecreate($imagewidth,$imageheight);//创建图像
imagecolorallocate($numimage,240,240,240);//定义图像背景
for($i=0;$i<strlen($num);$i++){
$x = mt_rand(1,8)+$imagewidth*$i/4;
$y = mt_rand(1,$imageheight/4);
$color=imagecolorallocate($numimage,mt_rand(0,150),mt_rand(0,150),mt_rand(0,150));
imagestring($numimage,5,$x,$y,$num[$i],$color);//随机输出验证码
}
for($i=0;$i<200;$i++){
$randcolor=imagecolorallocate($numimage,rand(200,255),rand(200,255),rand(200,255));
imagesetpixel($numimage,rand()%70,rand()%20,$randcolor); //设置背景效果
}
imagepng($numimage);//生成图像
imagedestroy($numimage);//销毁图像
?>