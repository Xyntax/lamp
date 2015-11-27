<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>图形计算器</title>
</head>
<body>
    <center>
        <h1>图形－周长计算器</h1>
        <a href="index.php?shape=rec">矩形</a> ||
        <a href="index.php?shape=tri">三角</a> ||
        <a href="index.php?shape=cir">圆形</a>
        <hr>

        <?php //注意，文件要后缀为php

            //自动加载类
            //要求：类文件统一命名：[小写类名.class.php]
            //要求：一个类对应一个单独的php文件
            function __autoload($className){
                include strtolower($className).".class.php";
            }
            $cla = new Form();
            echo $cla->getShape();
            echo $cla;
        ?>
    </center>
</body>
</html>