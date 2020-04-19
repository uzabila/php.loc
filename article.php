<?php 

echo $_SERVER['REQUEST_METHOD'];

require_once 'functions.php';

foreach ($getArticles as $key => $value) : ?>
	
	<?php if($value[id] === $_GET['id']) {
		echo '<a href="../">Home</a>';
		echo '<h1>'.$value['title'].'</h1>';
		echo '<p>'.$value['text'].'</p>';
	}; ?>

<?php endforeach; ?>