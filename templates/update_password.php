<?php $this->title = 'Modifier mot de passe'; ?>

<div>
    <p>Ce formulaire vous permet de modifier votre mot de passe.</p>
    
    <form method="post" action="../public/index.php?route=updatePassword">
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Mettre à jour" id="submit" name="submit">
    </form>
</div>
<br>