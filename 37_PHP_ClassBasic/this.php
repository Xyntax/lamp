<?php
class test{
    var $name;
    var $age;
    var $mail;

    function getName(){
        return $this->name; //这后面没$
    }
}


$cla=new test;
$cla->name="cdxy"; //这后面没$
echo $cla->getName()."<br>";
echo "......{$cla->getName()}..."."<br>"; //注意这种输出方式
?>