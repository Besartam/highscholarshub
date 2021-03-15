<?php
session_start();
?>

<ul>
<li><a href="index.php">Home</a></li>
<li><a href="add_news.php">Add news</a></li>
<li><a href="show_news.php">Show news</a></li>
<?php if(isset($_SESSION['name'])):?>
<h2>Welcome, <a href="#"><?php echo ($_SESSION['name']); ?></a></h2>
    <li><a href="logout.php">Logout</a></li>
<?php else: ?>
<li><a href="login.php">Login</a></li>
<li><a href="signup.php">Register</a></li>
<?php endif; ?>
</ul>