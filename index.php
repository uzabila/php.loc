<?php 

echo $_SERVER['REQUEST_METHOD'];

require_once 'functions.php';
foreach ($getArticles as $key => $value) : ?> 
	

	<p>
		<a href="article.php?id=<?=$value['id']?>">
			<?=$value['title']?>
		</a>
	</p>


<?php endforeach; ?>