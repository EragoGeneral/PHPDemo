<?php
echo "通过HTTP协议打开文件";
echo "<hr>";

if(!($file = fopen("http://localhost:8082/first/http.txt", "r"))){
    echo "文件不能打开";
    exit;
}

while(!feof($file)){
    echo "before read";
    echo "<br>";
    $line = fgetss($file, 255);
    //$encoding = mb_detect_encoding($line, array('GB2312','GBK','UTF-16','UCS-2','UTF-8','BIG5','ASCII'));
    //echo $encoding;
    iconv('ASCII','utf-8',$line);
    echo $line;
    echo "<br>";
}

fclose($file);
?>