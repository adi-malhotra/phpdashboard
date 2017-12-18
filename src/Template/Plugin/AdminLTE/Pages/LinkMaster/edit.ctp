<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinkMaster $linkMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $linkMaster->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $linkMaster->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Link Master'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Application Master'), ['controller' => 'ApplicationMaster', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application Master'), ['controller' => 'ApplicationMaster', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Link Master'), ['controller' => 'LinkMaster', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Link Master'), ['controller' => 'LinkMaster', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="linkMaster form large-9 medium-8 columns content">
    <?= $this->Form->create($linkMaster) ?>
    <fieldset>
        <legend><?= __('Edit Link Master') ?></legend>
        <?php
            echo $this->Form->control('link_url');
            echo $this->Form->control('link_name');
            echo $this->Form->control('is_active');
            echo $this->Form->control('application_id', ['options' => $applicationMaster, 'empty' => true]);
            echo $this->Form->control('link_description');
            echo $this->Form->control('parent_link_id', ['options' => $linkMaster, 'empty' => true]);
            echo $this->Form->control('link_type');
            echo $this->Form->control('order_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
