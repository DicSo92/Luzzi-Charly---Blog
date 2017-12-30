<?php require_once('_datas.php'); ?>

<?php $_GET['article_id'] = (int) $_GET['article_id']; ?>

<?php if (isset($_GET['article_id']) AND $_GET['article_id']>=1 AND array_key_exists($_GET['article_id'], $articles)):?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Title dynamique en fonction de l'article -->
        <?php foreach ($articles as $key => $simple_articles): ?>
            <?php if ($_GET['article_id'] == $simple_articles['id']): ?>
                <title><?php echo $simple_articles['title']; ?></title>
            <?php endif; ?>
        <?php endforeach; ?>
        <!----------------------------------------------->

        <?php require('partials/head_assets.php'); ?>
    </head>

    <body class="article-body">
        <div class="container-fluid">
            <?php require('partials/header.php'); ?>

            <div class="row my-3 article-content">
                <?php require('partials/nav.php'); ?>

                <!-- Affichage d'un article en particulier -->
                <main class="col-9">
                    <?php foreach ($articles as $key => $simple_articles): ?>
                        <?php if ($_GET['article_id'] == $simple_articles['id']): ?>
                            <article>
                                <h1> <?php echo $simple_articles['title']; ?> </h1>
                                <b class="article_category">
                                    [<?php
                                    foreach ($categories as $key=>$categorie):
                                        if ($simple_articles['category_id'] == $categorie['id']){
                                            echo $categorie['name'];
                                        }
                                    endforeach;
                                    ?>]
                                </b>
                                <span> <?php echo $simple_articles['date']; ?> </span>
                                <div class="article-content"> <?php echo $simple_articles['content']; ?> </div>
                            </article>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </main>
                <!------------------------------------------->
            </div>

            <?php require('partials/footer.php'); ?>

        </div>
    </body>
</html>
    
    <?php else:
        header('Location: index.php');
        exit();
    ?>

<?php endif; ?>
