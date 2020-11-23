<?php

require '../vendor/autoload.php';

use App\src\DAO\ArticleDAO;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <div>
        <h1>Le blog</h1>

        <?php
            $article = new ArticleDAO();
            $articles = $article->getArticles();
            foreach ($articles as $article) 
            {
        ?>

        <div>
            <h2><a href="./single.php?articleId=<?= htmlspecialchars($article->id); ?>"><?= htmlspecialchars($article->title);?></a></h2>
            <p><?= htmlspecialchars($article->content);?></p>
            <p><?= htmlspecialchars($article->author);?></p>
            <p>Créé le : <?= htmlspecialchars($article->createdAt);?></p>
        </div>

        <?php
            }
            $articles->closeCursor();
        ?>
    </div>
</body>
</html>