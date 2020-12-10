<?php $this->title = "Article"; ?>

<div>
    <h2><?= htmlspecialchars($article->getTitle());?></h2>
    <p><?= htmlspecialchars($article->getContent());?></p>
    <p><?= htmlspecialchars($article->getAuthor());?></p>
    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
</div>

<div id="comments" class="text-left" style="margin-left: 50px">
    <h3>Ajouter un commentaire</h3>

    <?php include('form_comment.php'); ?>

    <h3>Commentaires</h3>

    <?php
    foreach ($comments as $comment) {
    ?>
        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
        <p><?= htmlspecialchars($comment->getContent());?></p>
        <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>

        <?php
        if ($comment->isFlag()) {
        ?>
            <p>Ce commentaire a déjà été signalé</p>
        <?php
        } else {
        ?>
            <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
        <?php
        }
        ?>
    <?php
    }
    ?>
</div>