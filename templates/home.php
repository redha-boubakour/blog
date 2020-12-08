<?php $this->title = "Accueil"; ?>

<h1>Blog</h1>

<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>

<br><a href="../public/index.php?route=addArticle">Nouvel article</a>
<br><a href="../public/index.php?route=register">Inscription</a>
<br><a href="../public/index.php?route=login">Connexion</a>

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