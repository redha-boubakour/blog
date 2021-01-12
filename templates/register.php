<?php $this->title = "Inscription"; ?>

<div>
    <form method="post" action="../public/index.php?route=register">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input class="form-control" type="text" id="pseudo" name="pseudo">
        </div>
        <?php if (isset($errors['pseudo'])) { ?>
            <div class="alert alert-warning">
                <?= $errors['pseudo'] ?>
            </div>
        <?php } ?>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" id="password" name="password">
        </div>
        <?php if (isset($errors['password'])) { ?>
            <div class="alert alert-warning">
                <?= $errors['password'] ?>
            </div>
        <?php } ?>
        <input class="btn btn-secondary" type="submit" id="submit" name="submit" value="Inscription">
    </form>
</div>