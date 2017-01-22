<?php
setcookie('cookie_1', 'i am cookie1', time()+60*60);    //1小时后失效
setcookie('cookie_2', 'i am cookie2', time()+24*60*60); //1天后失效

//设置cookie 于2012年1月1日中午12点失效
setcookie('cookie_3', 'i am cookie3', mktime(17, 41, 20, 1, 19, 2017));

//关闭页面后失效， 设置为0时，刷新
setcookie('mycookie_1', 'delicious', 0); 


echo $_COOKIE['cookie_1']."<br><br>";
echo $_COOKIE['cookie_2']."<br><br>";
echo $_COOKIE['cookie_3']."<br><br>";
echo $_COOKIE['mycookie_1']."<br><br>";

?>