<?php

//ce fichier contient les données à exploiter à différents endroits du site
//il simule des enregistrements d'une base de données de blog

//liste des catégories
//les clés numériques de premier niveau ainsi que les valeurs associées aux clés 'id' de second niveau sont considérées comme les identifiants uniques des catégories
$categories = [
    1 => ['id' => 1, 'name' => 'Cinéma', 'description' => 'Trailers, infos, sorties...'],
    2 => ['id' => 2, 'name' => 'Musique', 'description' => 'Concerts, sorties d\'albums, festivals...'],
    3 => ['id' => 3, 'name' => 'Théâtre', 'description' => 'Dates, représentations, avis...'],
    4 => ['id' => 4, 'name' => 'Jeux vidéos', 'description' => 'Videos, tests...']
];

//liste des articles triés par date, du plus récent au plus ancien
//On part du principe qu'ils ont été triés au moment de leur appel en base de données
//les clés numériques de premier niveau ainsi que les valeurs associées aux clés 'id' de second niveau sont considérées comme les identifiants uniques des articles
//on admettra, pour le moment, qu'un article ne peut appartenir qu'à une catégorie à la fois (valeur de 'category_id', correspondant à l'id de la catégorie dans le tableau des catégories)
$articles = [
    9 => ['id' => 9, 'category_id' => 2, 'title' => 'Hellfest 2018, l\'affiche quasi-complète', 'date' => '07/12/2017', 'summary' => 'Résumé de l\'article Hellfest', 'content' => '<p>Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. </p>'],
    8 => ['id' => 8, 'category_id' => 1, 'title' => 'Critique « Star Wars 8 – Les derniers Jedi » de Rian Johnson : le renouveau de la saga ?', 'date' => '06/12/2017', 'summary' => 'Résumé de l\'article Star Wars 8', 'content' => '<p>Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue.</p>'],
    7 => ['id' => 7, 'category_id' => 2, 'title' => 'Revue - The Ramones', 'date' => '05/12/2017', 'summary' => 'Résumé de l\'article The Ramones', 'content' => '<p>Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh.</p>'],
    6 => ['id' => 6, 'category_id' => 4, 'title' => 'De “Skyrim” à “L.A. Noire” ou “Doom” : pourquoi les vieux jeux sont meilleurs sur la Switch', 'date' => '04/12/2017', 'summary' => 'Résumé de l\'article Switch', 'content' => '<p>Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.</p>'],
    5 => ['id' => 5, 'category_id' => 4, 'title' => 'Comment “Assassin’s Creed” trouve un nouveau souffle en Egypte', 'date' => '03/12/2017', 'summary' => 'Résumé de l\'article Assassin’s Creed', 'content' => '<p>Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar.</p>'],
    4 => ['id' => 4, 'category_id' => 2, 'title' => 'BO de « Les seigneurs de Dogtown » : l’époque bénie du rock.', 'date' => '02/12/2017', 'summary' => 'Résumé de l\'article Les seigneurs de Dogtown', 'content' => '<p>Nulla sollicitudin. Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula.</p>'],
    3 => ['id' => 3, 'category_id' => 4, 'title' => 'Pourquoi "Destiny 2" est un remède à l’ultra-moderne solitude', 'date' => '01/12/2017', 'summary' => ' Résumé de l\'article Destiny 2', 'content' => '<p>Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet pellentesque diam.</p>'],
    2 => ['id' => 2, 'category_id' => 4, 'title' => 'Pourquoi "Mario + Lapins Crétins : Kingdom Battle" est le jeu de la rentrée', 'date' => '30/11/2017', 'summary' => 'Résumé de l\'article Mario + Lapins Crétins', 'content' => '<p>Integer quis metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>'],
    1 => ['id' => 1, 'category_id' => 1, 'title' => '« Le Crime de l’Orient Express » : rencontre avec Kenneth Branagh', 'date' => '29/11/2017', 'summary' => 'Résumé de l\'article Le Crime de l’Orient Express', 'content' => '<p>Morbi vel erat non mauris convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat.</p>']
];

?>
