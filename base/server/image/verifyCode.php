<?php

// request url: http://localhost:8082/PHPDemo/base/server/image/verifyCode.php?num=WT6b

header("content-type:image/png");            //������֤��
$num = $_GET['num'];//��ȡ���ݵı���ֵ
$imagewidth=60;//�趨ͼ����
$imageheight=18;//�߶�
$numimage = imagecreate($imagewidth,$imageheight);//����ͼ��
imagecolorallocate($numimage,240,240,240);//����ͼ�񱳾�
for($i=0;$i<strlen($num);$i++){
$x = mt_rand(1,8)+$imagewidth*$i/4;
$y = mt_rand(1,$imageheight/4);
$color=imagecolorallocate($numimage,mt_rand(0,150),mt_rand(0,150),mt_rand(0,150));
imagestring($numimage,5,$x,$y,$num[$i],$color);//��������֤��
}
for($i=0;$i<200;$i++){
$randcolor=imagecolorallocate($numimage,rand(200,255),rand(200,255),rand(200,255));
imagesetpixel($numimage,rand()%70,rand()%20,$randcolor); //���ñ���Ч��
}
imagepng($numimage);//����ͼ��
imagedestroy($numimage);//����ͼ��
?>