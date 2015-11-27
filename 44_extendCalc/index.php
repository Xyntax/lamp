<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>图形计算器</title>
</head>
<body>
<center>
    <h1 align="center">图形计算器</h1><br>
    <a href="index.php?shape=rec">矩形</a> ||
    <a href="index.php?shape=tri">三角形</a> ||
    <a href="index.php?shape=cir">圆形</a>
    <hr>

    <?php

    //这句话是为了保存输入框参数时，不会被notice报错
    error_reporting(E_ALL & ~E_NOTICE);  //设置错误报告级别

    function __autoload($className)
    {
        include strtolower($className) . ".class.php";
    }

    echo new Form();
    if (isset($_POST["sub"])) {
        echo new Result();
    }
    ?>
</center>
</body>
</html>