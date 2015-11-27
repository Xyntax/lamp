<?php

class Form
{
    private $action;
    private $shape;

    function __construct($action = "")
    {
        $this->action = $action;
        if (isset($_REQUEST["shape"])) {
            $this->shape = $_REQUEST["shape"];
        } else {
            $this->shape = "rec";
        }
    }

    function __toString()
    {
        $str = "<form action='{$this->action}' method='post'>";

        switch ($this->shape) {
            case "rec":
                $str .= '
                <input type="text" name="len" value="' . $_POST["len"] . '">
                <input type="text" name="wid" value="' . $_POST["wid"] . '">
                ';
                break;
            case "tri":
                //后面的$_POST是为了在结果显示出来时，输入框中还有原来输入的参数
                $str .= '
                <input type="text" name="a" value="' . $_POST["a"] . '">
                <input type="text" name="b"　value="' . $_POST["b"] . '">
                <input type="text" name="c"　value="' . $_POST["c"] . '">
                ';
                break;
            case "cir":
                $str .= '
                <input type="text" name="r" value="' . $_POST["r"] . '">
                ';
                break;
            default:
                $str = '
                <p>请选择一个形状！</p><br>
                ';
                break;

        }
        //这里的hidden参数意义是：在提交下面的表单时，再次提交shape参数，方便result类根据形状计算结果
        $str .= '<input type="hidden" name="shape1" value="' . $this->shape . '">';
        $str .= "<br><input type='submit' name='sub' value='计算'>";
        $str .= "</form>";
        return $str;
    }
}

?>