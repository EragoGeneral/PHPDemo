<?php

$dirname = "temp_data1";

if(mkdir($dirname)){
    echo "目录".$dirname."创建成功!";
    
    if($fp = fopen($dirname."/tmp.txt", 'a')){
        if(fwrite($fp, "Put some content into file.")){
            echo "<hr>";
            echo "在目录".$dirname."下创建文件tmp.txt";
        }
    }
}else{
    echo "Fail to create directory";
    exit;
}

echo "<hr>";

if(rmdir($dirname)){
    echo '删除目录'.$dirname.'成功！';
}else{
    echo '删除目录失败';
    exit;
}
?>