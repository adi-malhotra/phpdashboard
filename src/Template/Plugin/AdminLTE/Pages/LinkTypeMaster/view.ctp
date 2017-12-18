<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinkTypeMaster $linkTypeMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Link Type Master'), ['action' => 'edit', $linkTypeMaster->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Link Type Master'), ['action' => 'delete', $linkTypeMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $linkTypeMaster->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Link Type Master'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Link Type Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="linkTypeMaster view large-9 medium-8 columns content">
    <h3><?= h($linkTypeMaster->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Desc') ?></th>
            <td><?= h($linkTypeMaster->desc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($linkTypeMaster->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $linkTypeMaster->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
