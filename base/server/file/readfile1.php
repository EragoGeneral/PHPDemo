<?php
$file_path = "test.txt";
if (file_exists($file_path)) {
    $fp = fopen($file_path, "r");
    $str = "";
    while (! feof($fp)) {
        $str .= fgets($fp); // 逐行读取。如果fgets不写length参数，默认是读取1k。
    }
    $str = str_replace("\r\n", "<br />", $str);
    echo $str;
}
?>