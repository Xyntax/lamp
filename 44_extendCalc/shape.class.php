<?php

/**
 * Created by IntelliJ IDEA.
 * User: xy
 * Date: 11/27/15
 * Time: 11:35 AM
 */
abstract class Shape
{
    public $shapeName;

    abstract function area();

    abstract function perimeter();

    protected function check($a, $message = "")
    {
        if ($a == "" || !is_numeric($a) || $a <= 0) {
            echo "<font color='red'>".$message."必须为非负非空！";
            return false;
        }
        else{
            return true;
        }
    }
}