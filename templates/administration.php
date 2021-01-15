<?php $this->title = 'Administration'; ?>

<?php include ('flashes.php'); ?>

<a class="btn btn-success" href="../public/index.php?route=addArticle">Nouvel article</a>

<br><br>

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="article-tab" data-toggle="tab" href="#article" role="tab" aria-controls="home" aria-selected="true">Articles</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="comment-tab" data-toggle="tab" href="#comment" role="tab" aria-controls="profile" aria-selected="false">Commentaires signalés</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="user-tab" data-toggle="tab" href="#user" role="tab" aria-controls="contact" aria-selected="false">Utilisateurs</a>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="article" role="tabpanel" aria-labelledby="article-tab">
        <table class="table table-bordered">
            <tr>
                <td>Id</td>
                <td>Titre</td>
                <td>Contenu</td>
                <td>Auteur</td>
                <td>Date</td>
                <td>Actions</td>
            </tr>
            <?php foreach ($articles as $article) { ?>
            <tr>
                <td><?= htmlspecialchars($article->getId());?></td>
                <td><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></td>
                <td><?= substr(htmlspecialchars($article->getContent()), 0, 150);?></td>
                <td><?= htmlspecialchars($article->getAuthor());?></td>
                <td>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></td>
                <td>
                    <a class="btn btn-warning" href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
                    <a class="btn btn-danger" href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div class="tab-pane fade" id="comment" role="tabpanel" aria-labelledby="comment-tab">
        <table class="table table-bordered">
            <tr>
                <td>Id</td>
                <td>Pseudo</td>
                <td>Message</td>
                <td>Date</td>
                <td>Actions</td>
            </tr>
            <?php foreach ($comments as $comment) { ?>
            <tr>
                <td><?= htmlspecialchars($comment->getId());?></td>
                <td><?= htmlspecialchars($comment->getPseudo());?></td>
                <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
                <td>Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
                <td>
                    <a class="btn btn-warning" href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire</a>
                    <a class="btn btn-danger" href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div class="tab-pane fade" id="user" role="tabpanel" aria-labelledby="user-tab">
        <table class="table table-bordered">
            <tr>
                <td>Id</td>
                <td>Pseudo</td>
                <td>Date</td>
                <td>Rôle</td>
                <td>Actions</td>
            </tr>
            <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= htmlspecialchars($user->getId());?></td>
                <td><?= htmlspecialchars($user->getPseudo());?></td>
                <td>Créé le : <?= htmlspecialchars($user->getCreatedAt());?></td>
                <td><?= htmlspecialchars($user->getRole());?></td>
                <td>
                    <?php if($user->getRole() != 'admin') { ?>
                        <a class="btn btn-danger" href="../public/index.php?route=deleteUser&userId=<?= $user->getId(); ?>">Supprimer</a>
                    <?php } else { ?>
                        <p>Suppression impossible (Role : Admin)</p>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>