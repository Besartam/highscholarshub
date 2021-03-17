<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=projektif", "root" , "");    
}catch(PDOException $pdo){
    die("Unsuccessful connection");
}