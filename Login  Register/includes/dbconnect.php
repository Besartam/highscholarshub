<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=projektiF", "root" , "");    
}catch(PDOException $pdo){
    die("Unsuccessful connection");
}