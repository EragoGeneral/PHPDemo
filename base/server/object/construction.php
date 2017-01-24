<?php
class Studnet{
    private $id, $name;
    
    public function __construct($s_id, $s_name){
        $this->id = $s_id;
        $this->name = $s_name;
    }
}

$stu = new Studnet(1, "George Wesley");
?>