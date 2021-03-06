﻿<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pages'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pages form large-9 medium-8 columns content">
    <?= $this->Form->create($page) ?>
    <fieldset>
        <legend><?= __('Add Page') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('slug');
            echo $this->Form->input('content');
            echo $this->Form->input('description');
            echo $this->Form->input('keywords');
            echo $this->Form->input('templatename');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
