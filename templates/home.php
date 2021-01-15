<?php $this->title = "Accueil"; ?>

<?php include ('flashes.php'); ?>

<img src="../public/icons/iconmonstr-info-6-240.png" alt="Important" id="myBtn" width="60" height="60">

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close"></span>
        <div>
            <h4>Ce blog a été crée en suivant le cours disponible sur le site : <a href="https://codededev.com/cours/creer-son-premier-blog-en-poo-en-php/" target="_blank">Codededev</a></h4><br>
            <p>Créateur : Mohamed Rédha BOUBAKOUR</p>
            <p>Principaux objectifs : Se familiariser avec la POO (programmation orientée objet) en PHP ; Mobiliser le Framework CSS "Bootstrap" ; Se preparer à la phase suivante - l'apprentissage du framework "Symfony".</p><br>
            <h4>Compte administrateur : Redha</h4>
            <h4>Mot de passe : 1234</h4>
        </div>
    </div>
</div>

<?php foreach ($articles as $article) { ?>
    <div id="post">
        <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
        <p><?= substr(htmlspecialchars($article->getContent()), 0, 450);?></p>
        <p><?= htmlspecialchars($article->getAuthor());?></p>
        <div class="flex">
            <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
            <a class="btn btn-secondary" href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>">Lire la suite</a>
        </div>
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