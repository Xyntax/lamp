<?php
class myClass{
    //[public protected private const static var] $xxx;
    //成员属性必需要有修饰词，不知道的时候就用public或var
    var $name="nooo";
    private $age;
    var $mail;

    function getName(){
        return true;
    }
}

$c1=new myClass;
  $c2=new myClass;

  $c1->name="zhasan";

  echo $c1->name."<br>";

  echo $c2->getName()."<br>";
?>