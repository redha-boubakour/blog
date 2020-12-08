<?php $this->title = "Inscription"; ?>

<h1>Blog</h1>

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

    <br><a href="../public/index.php">Retour à l'accueil</a>
</div>