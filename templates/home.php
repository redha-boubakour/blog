<?php $this->title = "Accueil"; ?>

<?php if ($this->session->get('add_comment')) { ?>
    <div class="alert alert-success">    
        <?= $this->session->show('add_comment'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('flag_comment')) { ?>
    <div class="alert alert-warning">
        <?= $this->session->show('flag_comment'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('register')) { ?>
    <div class="alert alert-success">
        <?= $this->session->show('register'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('login')) { ?>
    <div class="alert alert-success">
        <?= $this->session->show('login'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('logout')) { ?>
    <div class="alert alert-warning">
        <?= $this->session->show('logout'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('delete_account')) { ?>
    <div class="alert alert-warning">
        <?= $this->session->show('delete_account'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('not_article')) { ?>
    <div class="alert alert-warning">
        <?= $this->session->show('not_article'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('error_search')) { ?>
    <div class="alert alert-warning">
        <?= $this->session->show('error_search'); ?>
    </div>
<?php } ?>


<?php foreach ($articles as $article) { ?>
    <div>
        <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
        <p><?= htmlspecialchars($article->getContent());?></p>
        <p><?= htmlspecialchars($article->getAuthor());?></p>
        <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
        <a class="btn btn-secondary" href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>">Lire la suite</a>
    </div>
<?php } ?>

<nav aria-label="Pagination">
    <ul class="pagination pagination-sm justify-content-center">
        <?php
        for ($i = 1; $i <= $pagination->getPageNumber(); $i++) {
            if ($pagination->getPage() == $i) {
        ?>
        <li class="page-item active" aria-current="page">
            <span class="page-link">
                <?php echo $i; ?>
            </span>
        </li>
        <?php
            } else {
        ?>
            <li class="page-item">
                <a class="page-link" href="../public/index.php?page=<?= $i; ?>"><?= $i; ?></a>
            </li>
        <?php
            }
        }
        ?>
    </ul>
</nav>