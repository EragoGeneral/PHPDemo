<?php 
$host = '127.0.0.1';
$user_name = 'root';
$password = 'root';

$conn = mysqli_connect($host, $user_name, $password);

if(!$conn){
    die('数据库连接失败: '.mysql_error());
}

echo "数据库连接成功!";

mysqli_select_db($conn, "mybatis");

if(isset($_GET['page'])){       //由GET方法获得当前页数
    $page = $_GET['page'];
}else{
    $page = 1;
}
$page_size = 2;                //每页显示两条数据     

//获取数据总量
$sql = 'select * from system_users';
$result = mysqli_query($conn, $sql);
$total = mysqli_num_rows($result);

//从开始计算总页数
if($total){
    //如果总数据量小于 $page_size, 那么只有一页
    if($total < $page_size){
        $page_count = 1;
    }
    //如果有余数，则总页数等于总记录数除以页数的结果取整再加1
    if($total & $page_size){
        $page_count = (int)($total/$page_size) + 1;
    }
    //如果没有余数，则页数等于总数据量除以每页数的结果
    else{
        $page_count = $total / $page_size;
    }
    
}else{
    $page_count = 0;
}

//翻页链接
$turn_page = '';
if($page == 1){
    $turn_page .= '首页 | 上一页 |';
}else{
    $turn_page .= '<a href=page_data.php?page=1>首页</a> | <a href=page_data.php?page='.($page-1).'>上一页</a> |';
}
if($page == $page_count || $page_count ==0){
    $turn_page .= '下一页 | 尾页';
}else{
    $turn_page .= '<a href=page_data.php?page='.($page+1).'> 下一页 </a> | <a href=page_data.php?page='.$page_count.'> 尾页 </a>';
}

$sql = 'select id, login_name, user_name, email from system_users limit '.($page-1)*$page_size.','.$page_size;
$result = mysqli_query($conn, $sql);
?>

<html>
    <head>
        <title>数据分页</title>
    </head>
    <body center>
        <table align="center" width="75%" border="1" cellpadding="0" cellspacing="1" bgcolor="#7b7b84">
            <tr bgcolor="#8BBCC7">
                <td height="33"><div align="center"><strong>用户ID</strong></div></td>
                <td><div align="center"><strong>登录名</strong></div></td>
                <td><div align="center"><strong>用户名</strong></div></td>
                <td><div align="center"><strong>电子邮箱</strong></div></td>
            </tr>
            <?php 
                if($num = mysqli_num_rows($result)){
                    while ($row = mysqli_fetch_array($result)){
            ?>
                        <tr bgcolor="#fffff">
                            <td height="22" align="right"><?php echo $row['id']?>&nbsp;</td>
                            <td height="22"><?php echo $row['login_name']?>&nbsp;</td>
                            <td height="22"><?php echo $row['user_name']?>&nbsp;</td>
                            <td height="22"><?php echo $row['email']?>&nbsp;</td>
                        </tr>    
            <?php 
                    }
                }
                echo $turn_page;            //将分页字符串输出
                mysqli_close($conn);
            ?>
        </table>
    </body>
</html>