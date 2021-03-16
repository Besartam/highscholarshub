<?php 
try{
    $pdo = new PDO("mysql:host=localhost;dbname=projektiF", "root", "");
} catch(PDOExecption $pdo){
    die("Lidhja me DB - Deshtoi!");
}
?>