<?php 

require 'includes/dbconnect.php' ;


?>

<?php

  if(isset($_POST['submit'])){
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $gjinia = $_POST['gender'];
    $technology = implode(',', $_POST['technology']);
   
    

    $sql = 'INSERT INTO kontaktforma (emri, mbiemri, gjinia, technology) VALUES(:emri, :mbiemri, :gjinia, :technology)';
    $query = $pdo->prepare($sql);
    $query->bindParam('emri', $emri);
    $query->bindParam('mbiemri', $mbiemri);
    $query->bindParam('gjinia', $gjinia);
    $query->bindParam('technology', $technology);
    //echo $checkBox;
    $query->execute();
  }
?>

<div id="newsadd">
<form action="contact.php" method="POST">
<input type="text" name="emri" ><br>
<input type="text" name="mbiemri" ><br>
<input type="radio" name="gender" value="M" >M<br>
<input type="radio" name="gender" value="F" >F<br>
<input type="checkbox" name="technology[]" value="PHP">PHP<br>
<input type="checkbox" name="technology[]" value="JAVA">JAVA<br>
<input type="checkbox" name="technology[]" value="DOTNET">DotNET<br>
<!--<input type="text" name="kategoria" ><br>-->
<input type="submit" name="submit" value="Shto lajmin">

</form>


</div>