<?php
$str = "<h1><i>Good PHP<i></h1>";
$str_entity = htmlentities($str);

echo "转换前: $str";
echo "<br>";
echo "<br>";

echo "转换后: $str_entity";
?>