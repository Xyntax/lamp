<?php

class Cir extends Shape
{
    private $shape = "cir";
    private $r;

    function __construct()
    {
        if ($this->check($_POST["r"])){
            $this->r = $_POST["r"];
        }else{
            exit;
        }

    }

    function area()
    {
        return 3.14 * $this->r * $this->r;
    }

    function perimeter()
    {
        return 2 * (3.14 * $this->r);
    }
    function getShape(){
        return $this->shape;
    }
}