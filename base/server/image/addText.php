<?php
header( "Content-Type:text/html; charset=UTF-8 ");
//�������ͼ������
header("content-type:image/jpeg");
//������Ƭ
$im = imagecreatefromjpeg("img/tower.jpg");
//�����ֶ���ɫΪ��ɫ
$textcolor = imagecolorallocate($im, 56, 73, 136);
//�������� 
$fnt = "font/MSYHBD.TTF";
//����������崮
$text = iconv("GBK", "UTF-8", "����");
//echo $text;

//дTTF���ֵ�ͼ��
imagettftext($im, 28, 0, 100, 60, $textcolor, $fnt, $text);  
//���� jpeg ͼ��
imagejpeg($im);
//�ͷ���Դ
imagedestroy($im);

?>