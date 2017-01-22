<?php
$str = 'jingle bell~,';

echo '重复输出两次';
echo '<br>';
echo substr(str_repeat($str, 4), 0, (strlen(str_repeat($str, 4))-1));

echo '<br>';
echo '<br>';

echo '当str_repeat第二个参数为0时: ';
echo '<br>';
echo 's='.str_repeat($str, 0);

?>