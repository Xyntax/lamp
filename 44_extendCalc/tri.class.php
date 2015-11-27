<?php

/**
 * Created by IntelliJ IDEA.
 * User: xy
 * Date: 11/27/15
 * Time: 10:26 AM
 */
class Tri extends Shape
{
    private $shape = "tri";
    private $a;
    private $b;
    private $c;

    function __construct()
    {
        if ($this->check($_POST["a"])){
            $this->a = $_POST["a"];
        }else{
            exit;
        }
        if ($this->check($_POST["b"])){
            $this->a = $_POST["b"];
        }else{
            exit;
        }
        if ($this->check($_POST["c"])){
            $this->a = $_POST["c"];
        }else{
            exit;
        }
    }

    function area()
    {
        return "...";
    }

    function perimeter()
    {
        return $this->a + $this->b + $this->c;
    }

    function getShape()
    {
        return $this->shape;
    }
}