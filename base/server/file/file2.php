<?php
if (is_uploaded_file($_FILES['upload_file']['tmp_name'])){
    $upfile = $_FILES['upload_file'];
    //print_r($upfile);
    $name = $upfile['name'];//获取文件名
    $type = $upfile['type'];//文件类型
    $size = $upfile['size'];//文件大小
    $tmp_name = $upfile['tmp_name'];//服务器存储的临时名称
    $error = $upfile['error'];//错误信息

    switch ($type){
        case 'image/png':
            $ok=1;
            break;
        case 'image/jpg':
            $ok=1;
            break;
        case 'image/jif':
            $ok=1;
            break;
        case 'image/jpeg':
            $ok=1;
            break;
    }
    if ($ok && $error == 0){
        move_uploaded_file($tmp_name,'./upload/'.iconv("UTF-8", "gbk", $name));
        echo $tmp_name;
        echo '文件上传成功';
    }else{
        echo '文件上传失败';
    }

}
?>