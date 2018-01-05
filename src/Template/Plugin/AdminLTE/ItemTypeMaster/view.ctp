<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemTypeMaster $itemTypeMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Item Type Master'), ['action' => 'edit', $itemTypeMaster->item_type_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item Type Master'), ['action' => 'delete', $itemTypeMaster->item_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemTypeMaster->item_type_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Item Type Master'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item Type Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itemTypeMaster view large-9 medium-8 columns content">
    <h3><?= h($itemTypeMaster->item_type_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Item Type Desc') ?></th>
            <td><?= h($itemTypeMaster->item_type_desc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item Type Id') ?></th>
            <td><?= $this->Number->format($itemTypeMaster->item_type_id) ?></td>
        </tr>
    </table>
</div>
