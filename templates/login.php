<?php $this->title = "Connexion"; ?>

<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('need_login'); ?>

<div>
    <form method="post" action="../public/index.php?route=login">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo"><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Connexion" id="submit" name="submit">
    </form>
</div>