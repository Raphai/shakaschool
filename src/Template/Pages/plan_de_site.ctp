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

            <h2>Plan de site INFOGRAPHISTE-Poitiers.fr</h2>

            <div class="col-1-4 mobile-col-1-2">
                <h3>Services Web</h3>
                <ul>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                </ul>
            </div>
            <div class="col-1-4 mobile-col-1-2">
                <h3>Services Design</h3>
                <ul>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                </ul>
            </div>
            <div class="col-1-4 mobile-col-1-2">
                <h3>Services Print</h3>
                <ul>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                </ul>
            </div>
            <div class="col-1-4 mobile-col-1-2">
                <h3>Derniers travaux</h3>
                <ul>
                    <li><a href="">Web : AJSA.fr</a></li>
                    <li><a href="">Web : Simon Bouin</a></li>
                    <li><a href="">Design : Logo Shaka</a></li>
                </ul>
            </div>
            <div class="col-1-4 mobile-col-1-2">
                <h3>&Agrave; propos</h3>
                <ul>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                </ul>
            </div>
            <div class="col-1-4 mobile-col-1-2">
                <h3>Contact</h3>
                <ul>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php echo $this->element('footer'); ?>
</div>
