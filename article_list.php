<?php require_once('_datas.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <?php $_GET['category_id'] = (int)$_GET['category_id']; ?>
        <?php if ($_GET['category_id'] >= 1 AND $_GET['category_id'] <= count($categories) AND isset($_GET['category_id'])): ?>  <!-- in_array($_GET['category_id'], $categories) -->
            <!-- Title pour les categories -->
                <?php if (isset($categories[$_GET['category_id']])): ?>
                    <title><?php echo $categories[$_GET['category_id']]['name'];?> - Mon premier blog !</title>
                <?php endif; ?>
            <!------------------------------->
        <?php elseif ($_GET['category_id'] >= 1 AND $_GET['category_id'] <= count($categories) AND !isset($_GET['category_id'])) : ?>
            <!-- Title pour tous les articles -->
            <?php foreach ($articles as $key => $all_articles): ?>
                <title>Tous les articles - Mon premier blog !</title>
            <?php endforeach; ?>
            <!---------------------------------->
        <?php else:
            header('Location: index.php');
            exit(); ?>
        <?php endif; ?>

        <?php require('partials/head_assets.php'); ?>
    </head>

    <body class="article-list-body">
        <div class="container-fluid">
            <?php require('partials/header.php'); ?>
            <div class="row my-3 article-list-content">
                <?php require('partials/nav.php'); ?>
                <main class="col-9">
                    <section class="all_aricles">

                        <?php if ($_GET['category_id'] >= 1 AND $_GET['category_id'] <= count($categories) AND isset($_GET['category_id'])): ?>
                            <?php if (isset($categories[$_GET['category_id']])): ?>
                                <header>
                                    <h1 class="mb-4">
                                        <?php echo $categories[$_GET['category_id']]['name']; ?>
                                    </h1>
                                </header>
                                <div class="category_description mb-4">
                                    <?php echo $categories[$_GET['category_id']]['description']; ?>
                                </div>
                            <?php endif; ?>
                        <?php elseif ($_GET['category_id'] >= 1 AND $_GET['category_id'] <= count($categories) AND !isset($_GET['category_id'])): ?>
                            <header>
                                <h1 class="mb-4">Tous les articles :</h1>
                            </header>
                        <?php endif; ?>


                        <?php if ($_GET['category_id'] >= 1 AND $_GET['category_id'] <= count($categories) AND isset($_GET['category_id'])): ?>
                            <!-- Contenu pour les categories -->
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
                                            <?php echo $categorys_articles["summary"]; ?>
                                        </div>
                                        <a href="article.php?article_id=<?php echo $categorys_articles["id"]; ?>"> > Lire l'article </a>
                                    </article>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <!------------------------------------>

                        <?php elseif ($_GET['category_id'] >= 1 AND $_GET['category_id'] <= count($categories) AND !isset($_GET['category_id'])): ?>
                            <!-- Contenu pour tous les articles -->
                            <?php foreach ($articles as $key => $all_articles): ?>
                                <article class="mb-4">
                                    <h2>
                                        <?php echo $all_articles['title']; ?>
                                    </h2>
                                    <b class="article_category">
                                        [<?php foreach ($categories as $key=>$categorie){
                                            if ($all_articles['category_id'] == $categorie['id']){
                                                echo $categorie['name'];
                                            }
                                        } ?>]
                                    </b>
                                    <span class="article-date">
                                        <?php echo $all_articles['date']; ?>
                                    </span>
                                    <div class="article-content">
                                        <?php echo $all_articles['summary']; ?>
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
