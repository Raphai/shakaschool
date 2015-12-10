<!DOCTYPE html>
<html>
    <head>

        <?= $this->Html->charset(); ?>

        <title itemprop="name"><?php echo $title; ?></title>
        <?= $this->Html->meta('description',$description ); ?>

        <?= $this->Html->meta('keywords',$keywords);?>

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?= $this->Html->meta('favicon.ico','favicon.ico',array('type' => 'icon'));?>

        <?php // echo $this->Html->meta(array('rel' =>'apple-touch-icon','link' =>'/img/apple-touch-icon.png'));?>

        <?= $this->fetch('meta'); ?>

        <?= $this->fetch('css') ?>

        <?= $this->Html->css('style');?>

    <?php
    //<!--    <!--[if lt IE 9]>-->
    //<!--    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->
    //<!--    <![endif]-->-->
    ?>

    </head>

    <?php if($this->request->params['action'] == 'accueil'): $class = 'body-accueil'; endif; ?>

    <body class="body <?php if(!empty($class)): echo $class ; endif;  ?>"  >
         <?= $this->fetch('content'); ?>

     <?= $this->fetch('script'); ?>


    </body>
</html>
