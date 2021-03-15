<?php
    session_start();

    if (isset($_SESSION['user_id'])){
        header("Location: ./index.php");
    }

    require 'includes/dbconnect.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $sql = 'INSERT INTO users (name, email, password) VALUES(:name, :email, :password)';
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('password', $password);

        if($query->execute()){
            echo "U regjistrua me sukses!";

        }else{
            echo "Regjistrimi deshtoi";
        }
    }
?>

<div class="container">
    <h2>Regjistrohu</h2>
    <form action="signup.php" method="post">
    <input type="text" name="name" placeholder="Sheno emrin"><br>
    <input type="email" name="email" placeholder="Sheno email"><br>
    <input type="password" name="password" placeholder=""><br>
    <input type="submit" name="submit" value="Dergo">
    </form>

</div>