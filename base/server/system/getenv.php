<?php
$root = getenv('DOCUMENT_ROOT');
$port = getenv('SERVER_PORT');
$file = getenv('SCRIPT_NAME');
$ua = getenv('HTTP_USER_AGENT');
$method = getenv('REQUEST_METHOD');
$protocol = getenv('SERVER_PROTOCOL');

echo '服务器文档根目录:'.$root;
echo '<br><br>';

echo '服务器端口:'.$port;
echo '<br><br>';

echo '当前执行文件:'.$file;
echo '<br><br>';

echo '用户UA:'.$ua;
echo '<br><br>';

echo '请求方法:'.$method;
echo '<br><br>';

echo '传输协议:'.$protocol;
?>