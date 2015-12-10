<?php
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <meta name="robots" content="noindex, nofollow"/>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('manager.css') ?>
    <?= $this->fetch('css') ?>

</head>
<body>
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><?= $this->Html->link("Manager", ['controller'=>'Pages','action' => 'manager']); ?></li>
                <li><?= $this->Html->link("Projets", ['controller'=>'Projets','action' => 'index']); ?></li>
                <li><?= $this->Html->link("Infos", ['controller'=>'Infos','action' => 'edit',1]); ?></li>
                <li><?= $this->Html->link("Utilisateurs", ['controller'=>'Users','action' => 'index']); ?></li>

                <li class=""><?= $this->Html->link("Retour au site", ['controller'=>'Pages','action' => 'accueil'],['class' => 'alert-info']); ?></li>
                <li class=""><?= $this->Html->link("Deconnexion", ['controller'=>'Users','action' => 'logout'],['class' => 'alert-warning']); ?></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="wrapper-flash">
        <?= $this->Flash->render(); ?>
        </div>
    </div>
</div>

    <?= $this->fetch('content');?>

    <!--SCRIPT-->
    <?php echo $this->Html->script('jquery.min.js');?>
    <?php echo $this->Html->script('bootstrap.min.js');?>
    <?= $this->fetch('script') ?>
</body>
</html>
