<?
require 'config/dbconnect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$query = 'SELECT * FROM posts WHERE posts_id = :id';
$query= $pdo->prepare($query);

?>