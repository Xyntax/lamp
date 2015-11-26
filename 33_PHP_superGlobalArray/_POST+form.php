<?php
    print_r($_POST);
    //Array ( [uname] => 121fd [pass] => dasf [sub] => login )
?>

<form action="_GET+form.php" method="post">
    username:<input type="text" name="uname"><br>
    password:<input type="password" name="pass"><br>
    <input type="submit" name="sub" value="login"><br>
</form>