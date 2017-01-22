<?php

$content = file_get_contents("test.txt");
$str = str_replace("\r\n", "<br />", $content);
echo $str;

?>