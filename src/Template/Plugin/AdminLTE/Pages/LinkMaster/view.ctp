<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinkMaster $linkMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Link Master'), ['action' => 'edit', $linkMaster->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Link Master'), ['action' => 'delete', $linkMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $linkMaster->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Link Master'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Link Master'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Application Master'), ['controller' => 'ApplicationMaster', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application Master'), ['controller' => 'ApplicationMaster', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Link Master'), ['controller' => 'LinkMaster', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Link Master'), ['controller' => 'LinkMaster', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="linkMaster view large-9 medium-8 columns content">
    <h3><?= h($linkMaster->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Link Url') ?></th>
            <td><?= h($linkMaster->link_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link Name') ?></th>
            <td><?= h($linkMaster->link_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Application Master') ?></th>
            <td><?= $linkMaster->has('application_master') ? $this->Html->link($linkMaster->application_master->application_id, ['controller' => 'ApplicationMaster', 'action' => 'view', $linkMaster->application_master->application_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link Description') ?></th>
            <td><?= h($linkMaster->link_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link Master') ?></th>
            <td><?= $linkMaster->has('link_master') ? $this->Html->link($linkMaster->link_master->id, ['controller' => 'LinkMaster', 'action' => 'view', $linkMaster->link_master->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($linkMaster->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($linkMaster->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link Type') ?></th>
            <td><?= $this->Number->format($linkMaster->link_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Id') ?></th>
            <td><?= $this->Number->format($linkMaster->order_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($linkMaster->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $linkMaster->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
