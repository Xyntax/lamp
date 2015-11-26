<?php
$user=array("id"=>1, "name"=>"zhangsan", "age"=>10, "sex"=>"nan");

	while($arr=each($user)){
		//echo $arr[0]."==>".$arr[1]."<br>";
		echo $arr["key"]."---->".$arr["value"]."<br>";
	}



	/* each()没有了会返回false，此时while跳出循环！
	id---->1
name---->zhangsan
age---->10
sex---->nan
	*/
?>