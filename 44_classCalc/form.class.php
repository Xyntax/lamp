<?php

class Form{
    private $action;
    private $shape;
    function __construct($action=""){ //默认跳转到本页
        //print_r ($_GET); //注意这玩意是key-value对，不是索引数组
        if(isset($_REQUEST["shape"])){ //注意form要带引号 =woc=
            $this->shape = $_REQUEST["shape"];
        }
        else{
            $this->shape = "rec";
        }

    }
    function getShape(){
        return $this->shape;
    }
    function __toString(){
        $form="<form action='{$this->action}' method='post'>";

        $code="请选择";
        switch($this->shape){
            case "rec":
                $code = $this->rec();
                break;
            case "tri":
                $code = $this->tri();
                break;
            case "cir":
                $code = $this->cir();
                break;
        }
        $form.=$code."</form>";
        return $form;
    }

    function rec(){
        $string1='
        <table align="center" border="1" width="500">
            <caption>
                <h1>矩形计算器</h1>
            </caption>
            <tr>
                <td>
                    <input type="text" size="10" name="width">
                </td>
                <td>
                    <input type="text" size="10" name="length">
                </td>
                <td>
                    <input type="submit" name="sub" value="计算">
                </td>
            </tr>
        </table>
	    ';

	    if (isset($_POST["sub"])) {
            $string1.= "  结果：".($_POST["width"]+$_POST["length"])*2;
        }
        return $string1;
    }
    function tri(){
        $string1='
        <table align="center" border="1" width="500">
            <caption>
                <h1>三角形计算器</h1>
            </caption>
            <tr>
                <td>
                    <input type="text" size="10" name="l1">
                </td>
                <td>
                    <input type="text" size="10" name="l2">
                </td>
                <td>
                    <input type="text" size="10" name="l3">
                </td>
                <td>
                    <input type="submit" name="sub" value="计算">
                </td>
            </tr>
        </table>
	    ';

	    if (isset($_POST["sub"])) {
            $string1.= "  结果：".($_POST["l1"]+$_POST["l2"]+$_POST["l3"]);
        }
        return $string1;
    }
    function cir(){
        $string1='
        <table align="center" border="1" width="500">
            <caption>
                <h1>圆形计算器</h1>
            </caption>
            <tr>
                <td>
                    <input type="text" size="10" name="l1">
                </td>
                <td>
                    <input type="submit" name="sub" value="计算">
                </td>
            </tr>
        </table>
	    ';

	    if (isset($_POST["sub"])) {
            $string1.= "  结果：".($_POST["l1"]*2*3.1416);
        }
        return $string1;
    }
//注意对象里方法外不能直接写语句
}

?>

