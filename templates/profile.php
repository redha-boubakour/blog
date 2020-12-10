<?php $this->title = 'Mon profil'; ?>

<?= $this->session->show('update_password'); ?>

<div>
    <p>Votre pseudo : <?= $this->session->get('pseudo'); ?></p>
    <p>Votre ID : <?= $this->session->get('id'); ?></p>
    <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
    <a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
</div>