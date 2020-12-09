<?php $this->title = 'Mon profil'; ?>

<h1>Mon blog</h1>

<?= $this->session->show('update_password'); ?>

<div>
    <h2>Votre pseudo : <?= $this->session->get('pseudo'); ?></h2>
    <p>Votre ID : <?= $this->session->get('id'); ?></p>
    <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
</div>

<br><a href="../public/index.php">Retour à l'accueil</a>