<?php
//CSS
echo $this->Html->css(['simplegrid'], ['block' => 'css']);
//JAVASCRIPT
echo $this->Html->script('jquery-1.11.0.min', ['block' => 'script']);
echo $this->Html->script('js-menu-accueil', ['block' => 'script']);

?>

<?php echo $this->element('menu'); ?>

<div class="wrapper-main">
    <div class="main">
        <div class="grid grid-pad">
            <h1>Demande de devis</h1>
            <!--            <div class="col-1-4 mobile-col-1-2">-->
            <!--                <h3>bla bla</h3>-->
            <!--                <ul>-->
            <!--                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>-->
            <!--                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>-->
            <!--                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>-->
            <!--                </ul>-->
            <!--            </div>-->
        </div>
    </div>
    <?php echo $this->element('footer'); ?>
</div>
