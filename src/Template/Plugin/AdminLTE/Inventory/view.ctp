<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory $inventory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Inventory'), ['action' => 'edit', $inventory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inventory'), ['action' => 'delete', $inventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Inventory'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventory'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="inventory view large-9 medium-8 columns content">
    <h3><?= h($inventory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Application Name') ?></th>
            <td><?= h($inventory->application_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($inventory->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($inventory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transaction Date') ?></th>
            <td><?= h($inventory->transaction_date) ?></td>
        </tr>
    </table>
</div>
