<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <h1>Blog</h1>

    <div>
        <?php
        if ($this->session->get('pseudo')) {
        ?>
            <?= $this->session->get('pseudo'); ?>

            <a href="../public/index.php">Accueil</a>

            <?php if($this->session->get('role') === 'admin') { ?>
                <a href="../public/index.php?route=administration">Administration</a>
            <?php } ?>

            <a href="../public/index.php?route=profile">Profil</a>
            <a href="../public/index.php?route=logout">Déconnexion</a>

        <?php
        } else {
        ?>

            <a href="../public/index.php">Accueil</a>
            <a href="../public/index.php?route=register">Inscription</a>
            <a href="../public/index.php?route=login">Connexion</a>

        <?php
        }
        ?>
    </div>

    <div id="content">
        <?= $content ?>
    </div>
</body>
</html>