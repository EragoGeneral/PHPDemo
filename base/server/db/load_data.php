<?php
$host = "localhost";
$username = "root";
$password = "root";

$arr_city = array('Beijing'=>'北京', 'NewYork'=>'纽约', 'Paris'=>'巴黎', 'London'=>'伦敦', 'Roma'=>'罗马');

$conn = mysqli_connect($host, $username, $password);
if(!$conn){
    die('数据库连接失败！ '.mysql_error());
    exit;
}
mysqli_select_db($conn, 'mybatis');
$id = $_GET['uid'];

$sql = 'select * from teacher where t_id = '.$id;
$result = mysqli_query($conn, $sql) OR die("<br />ERROR:<b>".mysqli_error()."</b><br/>SQL:".$sql);
if(!mysqli_num_rows($result)){
    echo '用户ID错误！';
    exit;
}

$row = mysqli_fetch_array($result);
$name = $_POST['user_name'];
$city = $_POST['city'];

echo 'city: '.$city;

if(!empty($name) && trim($name) != ''){
    $sql = "update teacher set t_name = '".$name."', t_city = '".$city."' where t_id = ".$id;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    
    echo '数据修改成功， 打开<a href="page_data.php">此得</a>查看数据';
    exit;
}
?>
<html>
    <head>
        <title>修改用户</title>
    </head>
    <body>
        <b>修改用户信息</b>
        <form name="form" method="post" action="load_data.php?uid=3">
			<table width="75%" border="0" cellpadding="0" cellspacing="2">
				<tr>
					<td width="24%" height="29">用户名: </td>
					<td width="76%">
						<input type="text" name="user_name" id="user_name" size="20"
						  value="<?php echo $row['t_name'] ?>" />
					</td>
				</tr>
				<tr>
					<td>来自城市: </td>
					<td>
						<select name="city">
							<?php 
							foreach ($arr_city as $k=>$v){
                                $option = ($row['t_city'] == $k) ? 
                                    '<option value="'.$k.'" selected>'.$v.'</option>':
                                    '<option value="'.$k.'">'.$v.'</option>';
                                echo $option.'\n';
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
				    <td>注册时间: </td>
				    <td><?php echo $row['create_time']?></td>
				</tr>
				<tr>
					<td height="31">
						<input type="submit" name="Submit" value="修改" />
					</td>
					<td>&nbsp;</td>
				</tr>
			</table>
		</form>
    </body>
</html>








