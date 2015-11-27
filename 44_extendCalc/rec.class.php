<?php

/**
 * Created by IntelliJ IDEA.
 * User: xy
 * Date: 11/27/15
 * Time: 10:26 AM
 */
class Rec extends Shape
{
    var $shape = "rec";
    private $wid;
    private $len;

    function __construct()
    {
        if ($this->check($_POST["len"])){
            $this->len = $_POST["len"];
        }else{
            exit;
        }
        if ($this->check($_POST["wid"])){
            $this->wid = $_POST["wid"];
        }else{
            exit;
        }


    }

    function area()
    {
        return $this->wid * $this->len;
    }

    function perimeter()
    {
        return 2 * ($this->len + $this->wid);
    }

    function getShape()
    {
        return $this->shape;
    }
}