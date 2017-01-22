<?php
$env_var = newenv;
putenv("MY_ENV=$env_var");

echo '自定义的环境变量:'.getenv("MY_ENV");
?>