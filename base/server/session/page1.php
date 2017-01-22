<?php
session_start();

$_SESSION['user'] = 'KingKong';
$_SESSION['explain'] = '这是前一个页面的session 变量';

echo '这个页面已经通过session保存了一些变量';
echo '<br/><a href="page2.php">进入page2.php</a>查看这些变量值';

?>