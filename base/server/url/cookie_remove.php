<?php

setcookie("name","steve");
setcookie("gender","male");
$_COOKIE["age"] = 18;
setcookie("hometown", "GD");

setcookie("name", "");
setrawcookie("gender", "");
$_COOKIE["age"]="";
unset($_COOKIE["hometown"]);

foreach ($_COOKIE as $key => $value){
    echo "$key=>$value<br>"; 
}

?>