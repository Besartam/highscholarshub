<?php 

require 'config/dbconnect.php' ;


?>

<?php

  if(isset($_POST['submit'])){
    $emri = $_POST['emri'];
    $mbiemri = $_POST['email'];
    $gjinia = $_POST['subject'];
    $technology = implode(',', $_POST['message']);
   
    

    $sql = 'INSERT INTO kontaktforma (emri, email, subject, message) VALUES(:emri, :email, :subject, :message)';
    $query = $pdo->prepare($sql);
    $query->bindParam('emri', $emri);
    $query->bindParam('email', $email);
    $query->bindParam('subject', $subject);
    $query->bindParam('message', $message);
    //echo $checkBox;
    $query->execute();
  }
?>

<section id="main" class="container medium">
            <header>
                <h2>Na kontaktoni</h2>
                <p>Na tregoni se çfarë mendoni per web faqen tonë</p>
            </header>
            <div class="box">
                <form method="post" action="#">
                    <div class="row gtr-50 gtr-uniform">
                        <div class="col-6 col-12-mobilep">
                            <input type="text" name="name" id="name" value="" placeholder="Emri" />
                        </div>
                        <div class="col-6 col-12-mobilep">
                            <input type="email" name="email" id="email" value="" placeholder="Email" />
                        </div>
                        <div class="col-12">
                            <input type="text" name="subject" id="subject" value="" placeholder="Tema" />
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="message" placeholder="Shkruani mesazhin tuaj këtu..." rows="6"></textarea>
                        </div>
                        <div class="col-12">
                            <ul class="actions special">
                                <li>
                                    <input type="submit" value="Dergo mesazhin" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </section>
