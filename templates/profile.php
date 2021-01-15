<?php $this->title = 'Mon profil'; ?>

<?php include ('flashes.php'); ?>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="article" role="tabpanel" aria-labelledby="article-tab">
        <table class="table table-bordered">
            <tr>
                <td>Votre pseudo</td>
                <td><?= $this->session->get('pseudo'); ?></td>
            </tr>
            <tr>
                <td>Votre ID</td>
                <td><?= $this->session->get('id'); ?></td>
            </tr>
        </table>
    </div>    
</div>

    <a class="btn btn-warning" href="../public/index.php?route=updatePassword">Modifier votre mot de passe</a><br>
    <a class="btn btn-danger" href="../public/index.php?route=deleteAccount">Supprimer votre compte</a>
</div>