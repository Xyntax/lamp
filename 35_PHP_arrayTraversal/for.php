<?php
 $user=array(1,"name"=>"zhangsan","age"=>40,"nan","aaa@bb.com");

 for ($i=0;$i<count($user);$i++){
    echo "\$user[{$i}]*".$user[$i]."<br>";
 }

 /*
 $user[0]*1
$user[1]*nan
$user[2]*aaa@bb.com

Notice: Undefined offset: 3 in /opt/lampp/htdocs/lamp/35_PHP_arrayTraversal/for.php on line 5
$user[3]*

Notice: Undefined offset: 4 in /opt/lampp/htdocs/lamp/35_PHP_arrayTraversal/for.php on line 5
$user[4]*
 */
?>