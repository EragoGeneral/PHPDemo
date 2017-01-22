<?php

$str = "我有%d本%s方面的编程书籍";

$str1 = printf($str, 1, "PHP");
echo $str1;

echo "<br>";
echo "<br>";

$num=4;
$lang="C++";
$str2 = printf($str, $num, $lang);
echo $str2;

?>