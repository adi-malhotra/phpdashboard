<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleLinkMap[]|\Cake\Collection\CollectionInterface $roleLinkMap
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Role Link Map'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Link Master'), ['controller' => 'LinkMaster', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Link Master'), ['controller' => 'LinkMaster', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Role Master'), ['controller' => 'RoleMaster', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role Master'), ['controller' => 'RoleMaster', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roleLinkMap index large-9 medium-8 columns content">
    <h3><?= __('Role Link Map') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roleLinkMap as $roleLinkMap): ?>
            <tr>
                <td><?= $this->Number->format($roleLinkMap->id) ?></td>
                <td><?= $roleLinkMap->has('link_master') ? $this->Html->link($roleLinkMap->link_master->id, ['controller' => 'LinkMaster', 'action' => 'view', $roleLinkMap->link_master->id]) : '' ?></td>
                <td><?= $roleLinkMap->has('role_master') ? $this->Html->link($roleLinkMap->role_master->role_id, ['controller' => 'RoleMaster', 'action' => 'view', $roleLinkMap->role_master->role_id]) : '' ?></td>
                <td><?= h($roleLinkMap->is_active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $roleLinkMap->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roleLinkMap->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roleLinkMap->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleLinkMap->id)]) ?>
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
