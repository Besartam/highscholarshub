<?php
require 'includes/dbconnect.php';

$query = $pdo->query('SELECT * from posts inner join news_category on news_category.category_id = posts.category_id');
$newsdata = $query->fetchAll();
?>
<a href="add_news.php">Shto lajme</a>
<div class="news">
<?php foreach($newsdata as $news):?>
<div class="news-box">
<a href="single_news.php?id=<?php echo $news['posts_id']; ?>"><h2><?php echo $news['posts_title']; ?></h2></a>
<p><?php echo $news['posts_body']; ?></p>
<img src="uploads/<?php echo $news['image']; ?>" width="400" />
<h4>Kategoria e lajmeve: <?php echo $news['category_name']; ?></h4>
</div>
<?php endforeach; ?>
</div>