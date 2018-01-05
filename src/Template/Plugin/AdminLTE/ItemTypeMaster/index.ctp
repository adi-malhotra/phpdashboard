<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemTypeMaster[]|\Cake\Collection\CollectionInterface $itemTypeMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Item Type Master'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itemTypeMaster index large-9 medium-8 columns content">
    <h3><?= __('Item Type Master') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('item_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_type_desc') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itemTypeMaster as $itemTypeMaster): ?>
            <tr>
                <td><?= $this->Number->format($itemTypeMaster->item_type_id) ?></td>
                <td><?= h($itemTypeMaster->item_type_desc) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $itemTypeMaster->item_type_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemTypeMaster->item_type_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemTypeMaster->item_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemTypeMaster->item_type_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
