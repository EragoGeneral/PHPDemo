大家好，<?php echo $_POST['user_name']?>!
<?php echo "<br/>"?>
<?php echo "<br/>"?>
我来自<?php echo $_POST['home_town']?>。

<br/><br/><br/>

<?php 
$user_name = $_POST["user_name"];
$gender = $_POST["gender"];
$hobby = $_POST["hobby"][0]."、".$_POST["hobby"][1]."、".$_POST["hobby"][2]."、".$_POST["hobby"][3];
$prof = $_POST["occup"];

echo "用户名: ".$user_name."<br/>";
echo "性别: ".$gender."<br/>";
echo "爱好: ".$hobby."<br/>";
echo "职业: ".$prof."<br/>";

?>
