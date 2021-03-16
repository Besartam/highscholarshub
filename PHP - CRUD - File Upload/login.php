<?php
    session_start();

    if (isset($_SESSION['user_id'])){
        header("Location: index.php");
    }

    require 'includes/dbconnect.php';

    if(isset($_POST['submit'])):
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = $pdo->prepare('SELECT id, name, email, password, role FROM users WHERE email = :email');
        $query->bindParam(':email', $email);
        $query->execute();

        $user = $query->fetch();

        if(count($user) > 0 && password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['permission'] = $user['role'];

            header("Location: ./index.php");
        }else{
            echo "Ke shenu fjalekalimin gabim!";
        }

    endif;
?>


<h2>Login here</h2>
<a href="signup.php">Regjistrohu nese ske llogari</a>
<form action="login.php" method="POST">
<input type="text" name="email"><br>
<input type="password" name="password"><br>
<input type="submit" name="submit" value="Login">
</form>