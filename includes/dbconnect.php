<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=highsbb", "root", "");
}catch(PDOException $pdo){
    die("Lidhja me DB - Deshtoi");
}
?>