<?php

$s = "this is a string";
$i = 9;
$arr = array(2, 4, 6);

echo is_string($s);
echo "<br/>";echo "<br/>";
echo is_integer($i);
echo "<br/>";echo "<br/>";
echo is_array($arr);
echo "<br/>";echo "<br/>";

if(is_array($s)){
  echo 'is an array';  
}else{
  echo 'not an array';    
}
echo "<br/>";
echo "<br/>";


$str = "this is a string";
$int = 9;
$bool = FALSE;

echo "\$str的类型是：".gettype($str);
echo "<br/>";
echo "<br/>";

echo "\$int的类型是：".gettype($int);
echo "<br/>";
echo "<br/>";

echo "\$bool的类型是：".gettype($bool);
echo "<br/>";
echo "<br/>";


$a = 100;
echo "设置前，变量\$a的类型是:".gettype($a);
echo "<br/>";
echo "<br/>";

settype($a, "string");
echo "设置后，变量\$a的类型是：".gettype($a);
echo "<br/>";
echo "<br/>";

$var = "test string";
echo isset($var);
echo isset($var1);

unset($var);
unset($arr['elem']);
unset($var1, $var2, $var3);

?>