<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleMaster[]|\Cake\Collection\CollectionInterface $roleMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Role Master'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roleMaster index large-9 medium-8 columns content">
    <h3><?= __('Role Master') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('role_desc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roleMaster as $roleMaster): ?>
            <tr>
                <td><?= h($roleMaster->role_desc) ?></td>
                <td><?= h($roleMaster->is_active) ?></td>
                <td><?= $this->Number->format($roleMaster->created_by) ?></td>
                <td><?= h($roleMaster->creation_date) ?></td>
                <td><?= $this->Number->format($roleMaster->modified_by) ?></td>
                <td><?= h($roleMaster->modified_date) ?></td>
                <td><?= $this->Number->format($roleMaster->role_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $roleMaster->role_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roleMaster->role_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roleMaster->role_id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleMaster->role_id)]) ?>
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
