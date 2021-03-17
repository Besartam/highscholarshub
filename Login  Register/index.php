<?php 
session_start();

?>

<ul>
    <li><a href="login.php">Ballina</a></li>
    <li><a href="rupet.php">Grupet</a></li>
    <li><a href="about.php">About</a></li>
    <?php if(isset($_SESSION['name'])): ?>
        <h2>Welcome, <a href="#"><?php echo $_SESSION['name']; ?></a></h2>
        <li><a href="logout.php">Logout</a></li>
    <?php else: ?>
        <li><a href="login.php">Kyqu</a></li>
        <li><a href="signup.php">Regjistrohu</a></li>
    <?php endif; ?>
</ul>