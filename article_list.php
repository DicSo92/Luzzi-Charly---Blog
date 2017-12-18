<?php require_once('_datas.php'); ?>

<!DOCTYPE html>
<html>
<head>

<?php if (isset($_GET['category_id'])): ?>

    <?php $_GET['category_id'] = (int)$_GET['category_id']; ?>
    <?php if ($_GET['category_id'] >= 1 AND $_GET['category_id'] <= count($categories)): ?>  <!-- in_array($_GET['category_id'], $categories) -->
    <!-- Title pour les categories -->
    <?php foreach ($categories as $key => $categories_value): ?>
        <?php if ($_GET['category_id'] == $categories_value['id'] /*Ou simplement "== $key"*/): ?>
            <title><?php echo $categories_value['name']; ?> - Mon premier blog !</title>
        <?php endif; ?>
    <?php endforeach; ?>
    <!------------------------------->
    <?php require('partials/head_assets.php'); ?>
</head>
 <body class="article-list-body">
     <div class="container-fluid">
         <?php require('partials/header.php'); ?>
         <div class="row my-3 article-list-content">
             <?php require('partials/nav.php'); ?>
             <main class="col-9">
                 <section class="all_aricles">

                     <!-- Contenu pour les categories -->
                     <?php foreach ($categories as $key => $categories_value): ?>
                         <?php if ($_GET['category_id'] == $categories_value['id'] /*Ou simplement "== $key"*/): ?>
                             <header>
                                 <h1 class="mb-4">
                                     <?php echo $categories_value['name']; ?>
                                 </h1>
                             </header>
                             <div class="category_description mb-4">
                                 <?php echo $categories_value['description']; ?>
                             </div>
                         <?php endif; ?>
                     <?php endforeach; ?>

                     <?php foreach ($articles as $key => $categorys_articles): ?>
                         <?php if ($_GET['category_id'] == $categorys_articles['category_id']): ?>
                             <article class="mb-4">
                                 <h2>
                                     <?php echo $categorys_articles["title"]; ?>
                                 </h2>
                                 <span class="article-date">
                                     <?php echo $categorys_articles["date"]; ?>
                                 </span>
                                 <div class="article-content">
                                     <?php echo $categorys_articles["content"]; ?>
                                 </div>
                                 <a href="article.php?article_id=<?php echo $categorys_articles["id"]; ?>"> > Lire
                                     l'article </a>
                             </article>
                         <?php endif; ?>
                     <?php endforeach; ?>
                     <!------------------------------------>

                     <?php else:
                         header('Location: index.php');
                         exit(); ?>

                     <?php endif; ?>

 <?php else: ?> <!-- Pour isset -->

     <!-- Title pour tous les articles -->
     <?php foreach ($articles as $key => $all_articles): ?>
         <title>Tous les articles - Mon premier blog !</title>
     <?php endforeach; ?>
     <!---------------------------------->
     <?php require('partials/head_assets.php'); ?>

 </head>
 <body class="article-list-body">
     <div class="container-fluid">
         <?php require('partials/header.php'); ?>
         <div class="row my-3 article-list-content">
             <?php require('partials/nav.php'); ?>
             <main class="col-9">
                 <section class="all_aricles">

                     <!-- Contenu pour tous les articles -->
                     <header>
                         <h1>Tous les articles</h1>
                     </header>
                     <?php foreach ($articles as $key => $all_articles): ?>
                         <article class="mb-4">
                             <h2>
                                 <?php echo $all_articles['title']; ?>
                             </h2>
                             <span class="article-date">
                                 <?php echo $all_articles['date']; ?>
                             </span>
                             <div class="article-content">
                                 <?php echo $all_articles['content']; ?>
                             </div>
                             <a href="article.php?article_id=<?php echo $all_articles['id']; ?>"> > Lire l'article </a>
                         </article>
                     <?php endforeach; ?>
                     <!------------------------------------>

 <?php endif; ?>

                 </section>
             </main>
         </div>
         <?php require('partials/footer.php'); ?>
     </div>
 </body>
 </html>
