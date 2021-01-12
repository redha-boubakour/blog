<br>
<h1>Articles associés à la recherche : <?= $value; ?></h1>

<?php 
if (count($articles) > 0) {
    foreach ($articles as $article) {
?>
        <h4>Titre de l'article : <a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h4>
        <p>Extrait de l'article : <?= substr(htmlspecialchars($article->getContent()), 0, 100); ?></p>
<?php
    }
} else {
?>
        <p>Aucun résultat</p>
<?php
}
?>