<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>

<form method="post" action="../public/index.php?route=<?= $route; ?>">
    <div class="form-group">
        <label for="title">Titre</label>
        <input class="form-control" type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>">
    </div>
    <?php if (isset($errors['title'])) { ?>
        <div class="alert alert-danger">
            <?= $errors['title'] ?>
        </div>
    <?php } ?>

    <div class="form-group">
        <label for="content">Contenu</label>
        <textarea class="form-control" id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea>
    </div>
    <?php if (isset($errors['content'])) { ?>
        <div class="alert alert-danger">
            <?= $errors['content'] ?>
        </div>
    <?php } ?>

    <input class="btn btn-success" type="submit" id="submit" name="submit" value="<?= $submit; ?>">
</form>

