<?php 

//ce fichier contient les données à exploiter à différents endroits du site
//il simule des enregistrements d'une base de données de blog

//liste des catégories
//les clés numériques de premier niveau ainsi que les valeurs associées aux clés 'id' de second niveau sont considérées comme les identifiants uniques des catégories
$categories = [
	1 => ['id' => 1, 'name' => 'Catégorie 1', 'description' => 'Description de la catégorie 1.'],
	2 => ['id' => 2, 'name' => 'Catégorie 2', 'description' => 'Description de la catégorie 2.'],
	3 => ['id' => 3, 'name' => 'Catégorie 3', 'description' => 'Description de la catégorie 3.'],
	4 => ['id' => 4, 'name' => 'Catégorie 4', 'description' => 'Description de la catégorie 4.']
];

//liste des articles triés par date, du plus récent au plus ancien
//On part du principe qu'ils ont été triés au moment de leur appelle en base de données
//les clés numériques de premier niveau ainsi que les valeurs associées aux clés 'id' de second niveau sont considérées comme les identifiants uniques des articles
//on admettra, pour le moment, qu'un article ne peut appartenir qu'à une catégorie à la fois (valeur de 'category_id', correspondant à l'id de la catégorie dans le tableau des catégories)
$articles = [
	9 => ['id' => 9, 'title' => 'Titre de l\'article 9', 'date' => '07/12/2017', 'summary' => 'Résumé de l\'article 9.', 'content' => '<p>Contenu de l\'article 9.</p>', 'category_id' => '2'],
	8 => ['id' => 8, 'title' => 'Titre de l\'article 8', 'date' => '06/12/2017', 'summary' => 'Résumé de l\'article 8.', 'content' => '<p>Contenu de l\'article 8.</p>', 'category_id' => '1'],
	7 => ['id' => 7, 'title' => 'Titre de l\'article 7', 'date' => '05/12/2017', 'summary' => 'Résumé de l\'article 7.', 'content' => '<p>Contenu de l\'article 7.</p>', 'category_id' => '2'],
	6 => ['id' => 6, 'title' => 'Titre de l\'article 6', 'date' => '04/12/2017', 'summary' => 'Résumé de l\'article 6.', 'content' => '<p>Contenu de l\'article 6.</p>', 'category_id' => '4'],
	5 => ['id' => 5, 'title' => 'Titre de l\'article 5', 'date' => '03/12/2017', 'summary' => 'Résumé de l\'article 5.', 'content' => '<p>Contenu de l\'article 5.</p>', 'category_id' => '4'],
	4 => ['id' => 4, 'title' => 'Titre de l\'article 4', 'date' => '02/12/2017', 'summary' => 'Résumé de l\'article 4.', 'content' => '<p>Contenu de l\'article 4.</p>', 'category_id' => '2'],
	3 => ['id' => 3, 'title' => 'Titre de l\'article 3', 'date' => '01/12/2017', 'summary' => 'Résumé de l\'article 3.', 'content' => '<p>Contenu de l\'article 3.</p>', 'category_id' => '4'],
	2 => ['id' => 2, 'title' => 'Titre de l\'article 2', 'date' => '30/11/2017', 'summary' => 'Résumé de l\'article 2.', 'content' => '<p>Contenu de l\'article 2.</p>', 'category_id' => '4'],
	1 => ['id' => 1, 'title' => 'Titre de l\'article 1', 'date' => '29/11/2017', 'summary' => 'Résumé de l\'article 1.', 'content' => '<p>Contenu de l\'article 1.</p>', 'category_id' => '1']
];

?>