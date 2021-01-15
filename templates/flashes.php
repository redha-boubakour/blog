<?php if ($this->session->get('add_comment')) { ?>
    <div class="alert alert-success">    
        <?= $this->session->show('add_comment'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('flag_comment')) { ?>
    <div class="alert alert-warning">
        <?= $this->session->show('flag_comment'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('register')) { ?>
    <div class="alert alert-success">
        <?= $this->session->show('register'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('login')) { ?>
    <div class="alert alert-success">
        <?= $this->session->show('login'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('logout')) { ?>
    <div class="alert alert-warning">
        <?= $this->session->show('logout'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('delete_account')) { ?>
    <div class="alert alert-warning">
        <?= $this->session->show('delete_account'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('not_article')) { ?>
    <div class="alert alert-warning">
        <?= $this->session->show('not_article'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('error_search')) { ?>
    <div class="alert alert-warning">
        <?= $this->session->show('error_search'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('add_article')) { ?>
    <div class="alert alert-success">    
        <?= $this->session->show('add_article'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('edit_article')) { ?>
    <div class="alert alert-success">    
        <?= $this->session->show('edit_article'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('delete_article')) { ?>
    <div class="alert alert-success">    
        <?= $this->session->show('delete_article'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('unflag_comment')) { ?>
    <div class="alert alert-success">    
        <?= $this->session->show('unflag_comment'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('delete_comment')) { ?>
    <div class="alert alert-success">    
        <?= $this->session->show('delete_comment'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('delete_user')) { ?>
    <div class="alert alert-success">    
        <?= $this->session->show('delete_user'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('update_password')) { ?>
    <div class="alert alert-success">    
        <?= $this->session->show('update_password'); ?>
    </div>
<?php } ?>
<?php if ($this->session->get('not_admin')) { ?>
    <div class="alert alert-warning">    
        <?= $this->session->show('not_admin'); ?>
    </div>
<?php } ?>