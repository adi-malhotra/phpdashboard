<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinkTypeMaster $linkTypeMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Link Type Master'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="linkTypeMaster form large-9 medium-8 columns content">
    <?= $this->Form->create($linkTypeMaster) ?>
    <fieldset>
        <legend><?= __('Add Link Type Master') ?></legend>
        <?php
            echo $this->Form->control('desc');
            echo $this->Form->control('is_active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
