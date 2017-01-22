<?php

session_start();

echo $_SESSION['user']."<br/>";
echo $_SESSION['explain']."<br/>";

echo '<a href="page1.php">返回page1.php</a>';

?>