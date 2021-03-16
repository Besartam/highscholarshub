<?php

session_start();

if( isset($_SESSION['user_id']) ){
    header("Location: /");
}

require 'includes/dbconnect.php';


if(isset($_POST['submit'])):
    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = '';

    $query = $pdo->prepare('SELECT id,name,email,password FROM users WHERE email = :email');
    $query->bindParam(':email', $email);
    $query->execute();

    $user = $query->fetch();

    if(count($user) > 0 && password_verify($password, $user['password']) ){

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['name'] = $user['name'];

        header("Location: index.php");

    } else {
        $message = 'Sorry, those credentials do not match';
    }

endif;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

    <?php if(!empty($message)): ?>
        <p><?php echo $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    <span>or <a href="signup.php">signup here</a></span>

    <form action="login.php" method="POST">
        <input type="text" placeholder="Enter your email" name="email"><br>
        <input type="password" placeholder="and password" name="password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>