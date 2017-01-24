<?php
$host = "localhost";
$username = "root";
$password = "root";

$conn = mysqli_connect($host, $username, $password);
if(!$conn){
    die('数据库连接失败：'.mysql_errno());    
}

mysqli_select_db($conn, 'mybatis');
$sql = 'select id, login_name, user_name, email from system_users';
$result = mysqli_query($conn, $sql);

?>

<html>
    <head>
        <title>数据展示</title>
    </head>
    <body>
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
                mysqli_close($conn);
            ?>
        </table>
    </body>
</html>