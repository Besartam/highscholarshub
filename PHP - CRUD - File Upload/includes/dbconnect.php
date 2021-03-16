<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=bazafinale", "root", "");
}catch(PDOException $pdo){
    die("Lidhja me DB - Deshtoi!");
}

?>