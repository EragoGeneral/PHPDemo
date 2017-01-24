<?php
class Cat{
    private $name;
    
    public function __construct(){
        echo "<b>构造函数被调用</b><br/><br/>";
    }
    
    public function __destruct(){
        echo "<b>析构函数被调用</b><br/><br/>";
    }
    
    public function set_name($name){
        $this->name = $name;
    }
    
    public function get_name(){
        echo "这只猫的名称叫：".$this->name."<br/><br/>";
    }
}

$myPet = new Cat;
echo "__Construct() 调用之后 <br/><br/>";
$myPet->set_name("小白");
$myPet->get_name();
echo "类方法get_name()调用之后<br/><br/>";

?>