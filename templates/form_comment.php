<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>

<form method="post" action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()); ?>">
    <div class="form-group">
        <textarea class="form-control" id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea>
    </div>
    <input class="btn btn-success" type="submit" id="submit" name="submit" value="<?= $submit; ?>">
</form>

