<?php
require 'includes/dbconnect.php'; 
session_start();
?>

<?php
    if(isset($_POST['submit'])){
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
        $query = $pdo->prepare('SELECT * from users WHERE email = :email');
        $query->execute(array('email' => htmlspecialchars($_POST['email'] )));
        $count=$query->rowCount();
        echo $count;

       
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if($count == 0){
        $sql = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('password', $password);
        $query->execute();
        }else{
            echo "Emaili qe keni perdorur ekziston ne DB";
        }
        // echo $name;
        //echo $email;
        // echo $password;
        //print_r($query);
        

    
?>
<div>
<form action="add_users.php" method="post">
Name:
<input type="text" name="name" placeholder="Enter your name"/><br>
Email:
<input type="text" name="email" placeholder="Enter your email"/><br>
Password:
<input type="password" name="password"/><br>
<input type="submit" name="submit" value="Submit">

</form>
</div>