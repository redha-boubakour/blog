<?php $this->title = 'Modifier mot de passe'; ?>

<h1>Mon blog</h1>

<div>
    <p>Ce formulaire vous permet de modifier votre mot de passe.</p>
    
    <form method="post" action="../public/index.php?route=updatePassword">
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Mettre à jour" id="submit" name="submit">
    </form>
</div>
<br>
<a href="../public/index.php">Retour à l'accueil</a>