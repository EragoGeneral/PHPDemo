<?php
header( "Content-Type:text/html; charset=UTF-8 ");
//�������ͼ������
header("content-type:image/png");
//������Ƭ
$im = imagecreatefrompng("img/president.png");
//�����ֶ���ɫΪ��ɫ
$textcolor = imagecolorallocate($im, 8, 9, 9);
//�������� 
$fnt = "font/QNHGJHC.TTF";
//����������崮
$text = iconv("GBK", "UTF-8", "�ֺ���");
$text1 = iconv("GBK", "UTF-8", "�й���ǿ����");
//echo $text;

//дTTF���ֵ�ͼ��
imagettftext($im, 24, -5, 380, 330, $textcolor, $fnt, $text);
imagettftext($im, 24, -5, 350, 400, $textcolor, $fnt, $text1);

//���� jpeg ͼ��
imagepng($im);
//�ͷ���Դ
imagedestroy($im);

?>