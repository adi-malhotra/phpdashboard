<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRole $userRole
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Role'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Auth'), ['controller' => 'UserAuth', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Auth'), ['controller' => 'UserAuth', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Role Master'), ['controller' => 'RoleMaster', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role Master'), ['controller' => 'RoleMaster', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userRole form large-9 medium-8 columns content">
    <?= $this->Form->create($userRole) ?>
    <fieldset>
        <legend><?= __('Add User Role') ?></legend>
        <?php
            echo $this->Form->control('auth_user_id', ['options' => $userAuth, 'empty' => true]);
            echo $this->Form->control('role_id', ['options' => $roleMaster, 'empty' => true]);
            echo $this->Form->control('is_active');
            echo $this->Form->control('created_by');
            echo $this->Form->control('created_date');
            echo $this->Form->control('modified_by');
            echo $this->Form->control('modified_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
