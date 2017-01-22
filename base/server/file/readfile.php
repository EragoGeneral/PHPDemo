<?php

$fp=fopen("G://test.txt", "r");

if(!$fp){
    echo '无法打开文件';
    exit;
}

while(!feof($fp)){
    $line = fgets($fp);
    echo $line;
    echo '<br />';
}

fclose($fp);
?>