<?php
/*
 *      list()函数

 * 		a. list()=array(); 需要将一个数组赋值给这个函数
 * 		b. 数组中的元素个数，要和list()函数中的参数个数相同
 * 		c. 数组中的每个元素值会赋值list()函数中的每个参数，list()将每个参数转为变量
 */

list($name, $age, $sex)=array("zansan", 10, "nnnnn");

echo $name."<br>";
echo $age."<br>";
echo $sex."<br>";


/*
zansan
10
nnnnn
*/

list($name, , $sex)=array("zansan", 10, "nnnnn");

echo $name."<br>";

echo $sex."<br>";



?>