<?php require_once('_datas.php'); ?>

<nav class="col-3 py-2 categories-nav">
	<b>Catégories :</b>
	<ul>
		<li><a href="article_list.php">Tous les articles</a></li>
        <!-- liste des catégories -->
        <?php foreach ($categories as $key=>$categoryName): ?>
            <li><a href="article_list.php?category_id=<?php echo $key ?>"><?php echo $categoryName['name'] ?></a></li>
        <?php endforeach; ?>
	</ul>
</nav>
