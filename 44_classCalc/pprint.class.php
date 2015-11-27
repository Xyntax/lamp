<?php //注意别忘了这个

class PPrint{ //注意print类是内置的，别重名了;注意class前不要写public
    var $name="cdxy";
    function __construct(){
        echo "pprint constructor called"."<br>";
    }
}
?>