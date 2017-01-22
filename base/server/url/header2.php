<?php
header("Expires:Mon, 26, Jul 1970 05:00:00 GMT");
header("Last-Modified: ".gmdate("D,d M Y H:i:s")."GMT");
// 告诉浏览器不使用缓存
header("Cache-Control: no-cache, must-revalidate");

//与以前的服务器兼容，即兼容HTTP1.0协议
header("Pragma:no-cache");
header("Content-type: application/file");
header("Content-length: 2850");
header("Accept-Ranges:bytes");
header("Content-Disposition: attachment;filename=afilename");
?>