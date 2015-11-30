<?php
/**
 * Created by IntelliJ IDEA.
 * User: xy
 * Date: 11/28/15
 * Time: 9:46 PM
 */
function __construct($options = array(
    "filepath" => "./",
    "allowtype" => array("txt", "jpg"),
    "maxsize" => 1000000,
    "israndname" => true
))
{
    //解析传入的数组
    foreach ($options as $key => $value) {
        $key = strtolower($key);
        //判断key是否在类中声明
        if (in_array($key, get_class_vars(get_class($this)))) {
            //检查value是否符合要求
            if (checkValue($key, $value)) {
                $this->$key = $value;
            } else {
                //提示错误位置和参数
                echo "Invalid value" . $value . "found when init class " . get_class($this) . " with key: " . $key . " in array !";
                exit;
            }
        } else {
            //提示错误位置和参数
            echo "Error when init class " . get_class($this) . " with key: " . $key . " in array !";
            exit;
        }
    }
}