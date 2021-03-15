<?php
require 'includes/dbconnect.php';
//Duhet me pas kujdes me u perdor sessioni (per qeshtje siguri)

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = 'SELECT * from users WHERE id = :id';
$query = $pdo->prepare($sql);
$query->execute(['id' => $id]);

$user = $query->fetch();
/*
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = 'UPDATE users SET name = :name, email = :email WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->bindParam('name', $name);
    $query->bindParam('email', $email);
    $query->bindParam('id', $id);

    $query->execute();
    header("Location: users.php");
}*/

?>


<h2><?php echo $user['name']; ?></h2>
<h2><?php echo $user['email']; ?></h2>
<h2><?php echo $user['password']; ?></h2>
