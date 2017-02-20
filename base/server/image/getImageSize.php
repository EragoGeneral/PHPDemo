<?php

$filename = "img/1.jpg";
$type = getimagesize($filename);

echo $type[0].",".$type[1].",".$type[2].",".$type[3];

?>