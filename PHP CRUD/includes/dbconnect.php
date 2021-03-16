<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=app", "root" , "");    
}catch(PDOException $pdo){
    die("Unsuccessful connection");
}