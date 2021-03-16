<?php 
session_start();

?>

<ul>
    <li><a href="login.php">Home</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="about.php">About</a></li>
    <?php if(isset($_SESSION['name'])): ?>
        <h2>Welcome, <a href="#"><?php echo $_SESSION['name']; ?></a></h2>
        <li><a href="logout.php">Logout</a></li>
    <?php else: ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>
    <?php endif; ?>
</ul>