<?php

$file = "data.txt";
$content = "\r\n内容标题\r\n内容第一行\r\n内容第二行";

if(!$fp = fopen($file, 'a')){
    echo '打开文件失败';
    exit;
}

if(fwrite($fp, $content) === FALSE){
    echo '写入文件失败';
    exit;
}

echo '写入文件成功!';
fclose($fp);

?>