<?php $this->title = "Accueil"; ?>

<h1>Blog</h1>
<?= $this->session->show('add_article'); ?><br>
<a href="../public/index.php?route=addArticle">Nouvel article</a>

<?php
    foreach ($articles as $article)
    {
?>

<div>
    <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
    <p><?= htmlspecialchars($article->getContent());?></p>
    <p><?= htmlspecialchars($article->getAuthor());?></p>
    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
</div>

<?php
    }
?>