<?php
require 'config/dbconnect.php';
?>

<html>
    <head>
        <title>Kyqu dhe Regjistrohu</title>
        <link rel="stylesheet" href="assets/css/Kyqu.css">
    </head>
    
    <body>
        <div class = "hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="kyqu()">Kyqu</button>
                    <button type="button" class="toggle-btn" onclick="regjistrohu()">Regjistrohu</button>                    
                </div>
               <!--Kyqu-->
               <?php
               include 'login.php';  ?>
             

               <!-- <form id = "kyqu" class="input-group">
                   // <input name="emri" type="text" class="input-field" placeholder="Perdoruesi" required>
                   // <input name="password" type="text" class="input-field" placeholder="Fjalekalimi" required>
                   // <button name="submit"type="submit" class="submit-btn">Kyqu</button>
           </form>--> 
                <!--Regjistrogu-->
                <?php include 'signup.php'; ?>
               <!-- <form id="regjistrohu" class="input-group">
                    <input name ="emri" type="text" class="input-field" placeholder="Emri" required>
                    <input type="email" class="input-field" placeholder="Email" required>
                        <input type="text" class="input-field" placeholder="Shkruaj fjalekalimin" required>
                        <br>
                    <button name="submit" type="submit" class="submit-btn">Regjistrohu</button>
                </form>
            -->
            </div> 
        </div>
        <script>

            var x = document.getElementById("kyqu");
            var y = document.getElementById("regjistrohu");
            var z = document.getElementById("btn");

            function regjistrohu(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
            
            function kyqu(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }
        </script>
    </body>

</html>