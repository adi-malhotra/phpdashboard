<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleLinkMap $roleLinkMap
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $roleLinkMap->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $roleLinkMap->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Role Link Map'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Link Master'), ['controller' => 'LinkMaster', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Link Master'), ['controller' => 'LinkMaster', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Role Master'), ['controller' => 'RoleMaster', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role Master'), ['controller' => 'RoleMaster', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roleLinkMap form large-9 medium-8 columns content">
    <?= $this->Form->create($roleLinkMap) ?>
    <fieldset>
        <legend><?= __('Edit Role Link Map') ?></legend>
        <?php
            echo $this->Form->control('link_id', ['options' => $linkMaster, 'empty' => true]);
            echo $this->Form->control('role_id', ['options' => $roleMaster, 'empty' => true]);
            echo $this->Form->control('is_active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
