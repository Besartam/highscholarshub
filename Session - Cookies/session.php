<?php

session_start(); //start the PHP_session function 

if(isset($_SESSION['page_count']))
{
     $_SESSION['page_count'] += 1;
}
else
{
     $_SESSION['page_count'] = 50;
     $_SESSION['login'] = true;
}
 echo 'You are visitor number ' . $_SESSION['page_count'];
 echo $_SESSION['login'];
 //echo session_id();
?>