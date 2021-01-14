<?php $this->title = 'Mon profil'; ?>

<br><br>

<?= $this->session->show('update_password'); ?>
<?= $this->session->show('not_admin'); ?>

<div>
    <p>Votre pseudo : <?= $this->session->get('pseudo'); ?></p>
    <p>Votre ID : <?= $this->session->get('id'); ?></p>
    <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a><br>
    <a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
</div>