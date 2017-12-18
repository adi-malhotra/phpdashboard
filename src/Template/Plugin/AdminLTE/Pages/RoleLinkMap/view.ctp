<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleLinkMap $roleLinkMap
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Role Link Map'), ['action' => 'edit', $roleLinkMap->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Role Link Map'), ['action' => 'delete', $roleLinkMap->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleLinkMap->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Role Link Map'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role Link Map'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Link Master'), ['controller' => 'LinkMaster', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Link Master'), ['controller' => 'LinkMaster', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Role Master'), ['controller' => 'RoleMaster', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role Master'), ['controller' => 'RoleMaster', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roleLinkMap view large-9 medium-8 columns content">
    <h3><?= h($roleLinkMap->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Link Master') ?></th>
            <td><?= $roleLinkMap->has('link_master') ? $this->Html->link($roleLinkMap->link_master->id, ['controller' => 'LinkMaster', 'action' => 'view', $roleLinkMap->link_master->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role Master') ?></th>
            <td><?= $roleLinkMap->has('role_master') ? $this->Html->link($roleLinkMap->role_master->role_id, ['controller' => 'RoleMaster', 'action' => 'view', $roleLinkMap->role_master->role_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($roleLinkMap->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $roleLinkMap->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
