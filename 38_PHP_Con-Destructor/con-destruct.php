<?php
class Person{
    var $age;
    var $name;
    var $mail;

    //PHP4，为了向后兼容，一般两个方法都要写上
    function Person($name,$age,$mail){ //注意构造函数也要写function !
        $this->name=$name;
        $this->age=$age;
        $this->mail=$mail;

        echo "called: Person()"."<br>";
    }
    //PHP5优先解析
    function __construct($name,$age,$mail){
        $this->name=$name;
        $this->age=$age;
        $this->mail=$mail;

        echo "called: __construct()"."<br>";
    }

    function __destruct(){
    // 注意：释放的顺序是按栈的操作－后进先出
    // 想提前释放－$p=null;
        echo "destruct!";
    }
    function getName(){
        return $this->name;
    }


}

$person = new Person("cdxy",18,"i@cdxy.me");
//$person->name="cdxy";
echo $person->getName()."<br>";
?>