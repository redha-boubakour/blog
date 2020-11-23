<?php

require '../src/DAO/DAO.php';
require '../src/DAO/ArticleDAO.php';
require '../src/DAO/CommentDAO.php';

use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;

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
            $articles = $article->getArticle($_GET['articleId']);
            $article = $articles->fetch()
        ?>

        <div>
            <h2><?= htmlspecialchars($article->title);?></h2>
            <p><?= htmlspecialchars($article->content);?></p>
            <p><?= htmlspecialchars($article->author);?></p>
            <p>Créé le : <?= htmlspecialchars($article->createdAt);?></p>
        </div>

        <?php
            $articles->closeCursor();
        ?>

        <a href="./home.php">Retour à l'accueil</a>

        <h3>Les commentaires</h3>

        <?php
            $comment = new CommentDAO();
            $comments = $comment->getCommentsFromArticle($_GET['articleId']);
            foreach ($comments as $comment)
            {
        ?>

        <div>
            <h2><?= htmlspecialchars($comment->pseudo);?></h2>
            <p><?= htmlspecialchars($comment->content);?></p>
            <p><?= htmlspecialchars($comment->createdAt);?></p>
        </div>

        <?php
            }
            $comments->closeCursor();
        ?>
    </div>
</body>
</html>