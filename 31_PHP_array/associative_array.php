<?php
$array["num"]="1";
$array["text"]="nihao";
$array["boolean"]=true;
$array[9]=177;
$array[]=177;
$array[]=177;
$array[]=177;

echo "<pre>";
print_r ($array);
echo "</pre>";
/*
Array
(
    [num] => 1
    [text] => nihao
    [boolean] => 1
    [9] => 177
    [10] => 177
    [11] => 177
    [12] => 177
)
*/
?>