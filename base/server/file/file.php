<?php

$upload_path=$_SERVER['DOCUMENT_ROOT'].'/upload/';
$dest_file=$upload_path.basename($_FILES['myFile']['name']);

echo $upload_path;

$name=$_FILES["myFile"]["name"];
if(move_uploaded_file($_FILES['myFile']['tmp_name'], $dest_file))
{
    echo "文件已上传到服务器根目录的upload目录下";
}
else
{
    echo "文件上传时发生了一些错误, ".$_FILES['myFile']['error'];
}
 
?>