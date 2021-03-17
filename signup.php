<?php
  //session_start();

  //if( isset($_SESSION['user_id']) ){
  //  header("Location: index.php");
  //}

    require 'config/dbconnect.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $message = '';

        $sql = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('password', $password);
        
        if($query->execute()) {
            $message = "Successfully created your account";
        } else {
            $message = "A problem occurred creating your account";
        }
    }
?>

        <?php 
            if(!empty($message)) {
                echo "<p>$message</p>";
            } 
        ?>
        <form include="signup.php" id="regjistrohu" class="input-group">
                    <input name ="name" type="text" class="input-field" placeholder="Emri" required>
                    <input type="email" class="input-field" placeholder="Email" required>
                        <input name="password" type="text" class="input-field" placeholder="Shkruaj fjalekalimin" required>
                        <br>
                    <button name="submit" type="submit" class="submit-btn">Regjistrohu</button>
        </form>
