<?php $this->title = "Inscription"; ?>

<div>
    <form method="post" action="../public/index.php?route=register">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo"><br>

        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>

        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>

        <?= isset($errors['password']) ? $errors['password'] : ''; ?>

        <br><input type="submit" id="submit" name="submit" value="Inscription">
    </form>
</div>