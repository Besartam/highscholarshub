<?php
    session_start();
     print_r($_COOKIE);    //output the contents of the cookie array variable 
?>

<?php
    //Per te pa se nje Cookies a ekzstion?
    if(isset($_COOKIE["user_name"])){
        echo "TUNG ". $_COOKIE["user_name"];
    }else{
        echo "Miresevini Vizitor i panjohur!";
    }

    var_dump($_COOKIE);
?>

<?php


?>