<?php $this->title = 'Modifier mot de passe'; ?>

<div>
    <form method="post" action="../public/index.php?route=updatePassword">
        <div class="form-group">
            <label for="password">Votre nouveau mot de passe :</label><br>
            <input class="form-control" type="password" id="password" name="password"><br>
            <input class="btn btn-success" type="submit" value="Mettre à jour" id="submit" name="submit">
        </div>
    </form>
</div>
<br>