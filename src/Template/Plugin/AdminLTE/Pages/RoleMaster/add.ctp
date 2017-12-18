<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleMaster $roleMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Role Master'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="roleMaster form large-9 medium-8 columns content">
    <?= $this->Form->create($roleMaster) ?>
    <fieldset>
        <legend><?= __('Add Role Master') ?></legend>
        <?php
            echo $this->Form->control('role_desc');
            echo $this->Form->control('is_active');
            echo $this->Form->control('created_by');
            echo $this->Form->control('creation_date');
            echo $this->Form->control('modified_by');
            echo $this->Form->control('modified_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
