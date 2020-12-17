<?php $this->title = "Accueil"; ?>

<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>
<?= $this->session->show('not_article'); ?>
<?= $this->session->show('error_search'); ?>

<?php foreach ($articles as $article) { ?>

<div>
    <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
    <p><?= htmlspecialchars($article->getContent());?></p>
    <p><?= htmlspecialchars($article->getAuthor());?></p>
    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
</div>

<?php } ?>

<?php
for ($i = 1; $i <= $pagination->getPageNumber(); $i++) {
    if ($pagination->getPage() == $i) {
        echo $i;
    } else {
?>
        <a href="../public/index.php?page=<?= $i; ?>"><?= $i; ?></a>
<?php
    }
}
?>