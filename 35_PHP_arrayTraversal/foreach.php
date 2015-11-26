<?php
 $user=array(1,"name"=>"zhangsan","age"=>40,"nan","aaa@bb.com");

 foreach ($user as $value){
    echo $value."<br>";
 }
/*
1
zhangsan
40
nan
aaa@bb.com
*/
?>


<?php
 $user=array(1,"name"=>"zhangsan","age"=>40,"nan","aaa@bb.com");

 foreach ($user as $key=>$value){
    echo $key."===>".$value."<br>";
 }
/*
0===>1
name===>zhangsan
age===>40
1===>nan
2===>aaa@bb.com
*/
?>