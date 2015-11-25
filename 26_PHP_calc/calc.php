<html>
    <head>
        <title>实现简易计算器</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"＞
    </head>

    <body>
        <?php
            // print_r($_GET);
            if (isset($_GET["sub"]) ) {
                $flag1=true;
                $flag2=true;
                $error_msg="";

                if( !is_numeric($_GET["num1"]) ){
                    $error_msg="第一个数输入有误";
                    $flag1=false;
                }

                if( !is_numeric($_GET["num2"]) ){
                    $error_msg="第二个数输入错误";
                    $flag2=false;
                }

                if ($flag1 && $flag2){
                    $sum=0;
                    switch($_GET["option"]){
                        case "+":
                            $sum=$_GET["num1"]+$_GET["num2"];
                            break;
                        case "-":
                            $sum=$_GET["num1"]-$_GET["num2"];
                            break;
                        case "*":
                            $sum=$_GET["num1"]*$_GET["num2"];
                            break;
                        case "/":
                            $sum=$_GET["num1"]/$_GET["num2"];
                            break;
                        case "%":
                            $sum=$_GET["num1"]%$_GET["num2"];
                            break;
                    }
                }
            }
        ?>
        <table align="center" border="1" width="500">
            <caption>
                <h1>计算器</h1>
            </caption>
            <form action=calc.php>
                <tr>

                    <td>
                        <input type="text" size="5" name="num1">
                    </td>

                    <td>
                        <select name="option">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </td>

                    <td>
                        <input type="text" size="5" name="num2">
                    </td>

                    <td>
                        <input type="submit" name="sub" value="计算">
                    </td>

                    <?php
                        if (isset($_GET["sub"])) {
                            echo "<tr><td colspan='5'>";
                            if ($flag1 && $flag2){
                                echo "结果：".$_GET["num1"].$_GET["option"].$_GET["num2"]." = ".$sum;
                            }else{
                                echo $error_msg;
                            }
                            echo "</td></tr>";
                        }

                    ?>

                </tr>

            </form>
        </table>
    </body>
</html>