<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../public/index.php">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../public/index.php">Accueil</a>
            </li>

            <?php if ($this->session->get('pseudo')) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?route=logout">Déconnexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?route=profile">Profil</a>
                </li>
                <?php if ($this->session->get('role') === 'admin') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../public/index.php?route=administration">Administration</a>
                    </li>
                <?php } ?>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?route=register">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?route=login">Connexion</a>
                </li>
            <?php } ?>
        </ul>

        <form
            method="post"
            action="../public/index.php?route=search"
            class="form-inline my-2 my-lg-0"
        >
            <input
                aria-label="Rechercher"
                class="form-control mr-sm-2"
                id="search"
                name="search"
                placeholder="Rechercher"
                type="search"
            >

            <input
                class="btn btn-outline-success my-2 my-sm-0"
                type="submit" value="Rechercher"
            >
        </form>
    </div>
</nav>