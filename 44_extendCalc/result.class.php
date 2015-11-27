<?php

class Result
{
    private $shape;

    function __construct()
    {
        switch ($_POST["shape1"]) {
            case "rec":
                $this->shape = new Rec();
                break;
            case "tri":
                $this->shape = new Tri();
                break;
            case "cir":
                $this->shape = new Cir();
                break;
        }
    }

    function __toString()
    {
        $str = "<p>";
        $str .= "shapename:" . $this->shape->getShape() . "<br>";
        $str .= "L:" . $this->shape->perimeter() . "<br>";
        $str .= "A:" . $this->shape->area() . "<br>";
        $str .= "</p>";
        return $str;
    }
}

?>