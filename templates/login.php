<?php $this->title = "Connexion"; ?>

<?php if ($this->session->get('error_login')) { ?>
    <div class="alert alert-danger">    
        <?= $this->session->show('error_login'); ?>
    </div>
<?php } ?>

<div>
    <form method="post" action="../public/index.php?route=login">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input class="form-control" type="text" id="pseudo" name="pseudo">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" id="password" name="password">
        </div>
        <input class="btn btn-secondary" type="submit" value="Connexion" id="submit" name="submit">
    </form>
</div>