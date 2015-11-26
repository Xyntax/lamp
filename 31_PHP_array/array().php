<?php
$array = array(1,true,"test",19.9); //默认为索引数组
$array2 = array("id"=>1,"boolean"=>true,"name"=>"test",1,2,3,"index");
echo "<pre>";
print_r($array);
echo "<br>";
print_r($array2);
echo "</pre>";

/**
Array
(
    [0] => 1
    [1] => 1
    [2] => test
    [3] => 19.9
)

Array
(
    [id] => 1
    [boolean] => 1
    [name] => test
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => index
)


*/
?>