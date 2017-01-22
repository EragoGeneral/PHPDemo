<?php
$dir = "temp_data1";
$cp_file = "tmp_new.txt";

if(!copy($dir."/tmp.txt", $cp_file)){
    echo "Copy 文件 tmp.txt失败";
    exit;
}

echo "Copy 文件 tmp.txt成功";

echo "<br>";
echo "<br>";

if(unlink($dir."/tmp.txt")){
    echo "文件 tmp.txt删除成功";
}else{
    echo "文件 tmp.txt删除失败";
}

echo "<br>";
echo "<br>";

$newname = "rename.txt";
if(rename($cp_file, $newname)){
    echo "改名成功";
}else{
    echo "改名失败";
}

?>