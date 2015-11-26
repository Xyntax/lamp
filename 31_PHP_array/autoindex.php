<?php
$array[]="1";
$array[]="nihao";
$array[]=true;
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
    [0] => 1
    [1] => nihao
    [2] => 1
    [9] => 177
    [10] => 177
    [11] => 177
    [12] => 177
)
*/
?>