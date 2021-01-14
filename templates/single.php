<?php $this->title = "Article"; ?>

<br><br>

<div id="post">
    <h2><?= htmlspecialchars($article->getTitle());?></h2>
    <p><?= htmlspecialchars($article->getContent());?></p>
    <p><?= htmlspecialchars($article->getAuthor());?></p>
    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
</div>

<?php if ($this->session->get('role') === 'admin') { ?>
    <div class="actions">
        <a class="btn btn-warning" href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
        <a class="btn btn-danger" href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
    </div><br>
<?php } ?><br>

<div id="comments" class="text-left" style="margin-left: 50px">
    <?php if ($this->session->get('pseudo')) { ?>
        <h3>Ajouter un commentaire</h3><br>
        <?php include('form_comment.php'); ?>
    <?php } else { ?>
        <h3>Connectez-vous afin de pouvoir rédiger un commentaire.</h3>
    <?php } ?>

    <br><h3>Les commentaires</h3><br>

    <?php if (count($comments) > 0) { ?>
        <?php foreach ($comments as $comment) { ?>
            <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
            <p><?= htmlspecialchars($comment->getContent());?></p>
            <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>

            <?php if ($comment->isFlag()) { ?>
                <p class="btn btn-danger">Ce commentaire a déjà été signalé</p><br>
            <?php } else { ?>
                <p><a class="btn btn-warning" href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
            <?php } ?>

            <?php if ($this->session->get('role') === 'admin') { ?>
                <p><a class="btn btn-danger" href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>
            <?php } ?>
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
                        <a class="page-link" href="../public/index.php?route=article&articleId=<?= $article->getId(); ?>&page=<?= $i; ?>"><?= $i; ?></a>
                    </li>
                <?php
                    }
                }
                ?>
            </ul>
        </nav>
    <?php } else { ?>
        <p class="alert alert-warning">Aucun commentaire pour le moment</p>
    <?php } ?>
</div>