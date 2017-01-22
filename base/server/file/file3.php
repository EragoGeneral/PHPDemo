<?php
$upload_path = $_SERVER['DOCUMENT_ROOT']."/upload/";

$dest_file = $upload_path.basename($_FILES['upload_file']['name']);

echo $dest_file;

if(move_uploaded_file($_FILES['upload_file']['tmp_name'], $dest_file))
{
    echo '<br/>Success';
}
else 
{
    echo "Some error, ".$_FILES['upload_file']['error'];        
}

?>