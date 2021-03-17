<?php

session_start();

if( isset($_SESSION['user_id']) ){
    header("Location: /");
}

require 'config/dbconnect.php';


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
    <form id = "kyqu" class="input-group">
                    <input name="emri" type="text" class="input-field" placeholder="Perdoruesi" required>
                    <input name="password" type="text" class="input-field" placeholder="Fjalekalimi" required>
                    <button name="submit"type="submit" class="submit-btn">Kyqu</button>
            </form>
</body>
</html>