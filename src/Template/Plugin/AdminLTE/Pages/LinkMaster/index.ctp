<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinkMaster[]|\Cake\Collection\CollectionInterface $linkMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Link Master'), ['controller'=>'LinkMaster','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Application Master'), ['controller' => 'ApplicationMaster', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application Master'), ['controller' => 'ApplicationMaster', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="linkMaster index large-9 medium-8 columns content">
    <h3><?= __('Link Master') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('application_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link_description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_link_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($linkMaster as $linkMaster): ?>
            <tr>
                <td><?= $this->Number->format($linkMaster->id) ?></td>
                <td><?= h($linkMaster->link_url) ?></td>
                <td><?= h($linkMaster->link_name) ?></td>
                <td><?= h($linkMaster->created_at) ?></td>
                <td><?= $this->Number->format($linkMaster->created_by) ?></td>
                <td><?= h($linkMaster->is_active) ?></td>
                <td><?= $linkMaster->has('application_master') ? $this->Html->link($linkMaster->application_master->application_id, ['controller' => 'ApplicationMaster', 'action' => 'view', $linkMaster->application_master->application_id]) : '' ?></td>
                <td><?= h($linkMaster->link_description) ?></td>
                <td><?= $linkMaster->has('link_master') ? $this->Html->link($linkMaster->link_master->id, ['controller' => 'LinkMaster', 'action' => 'view', $linkMaster->link_master->id]) : '' ?></td>
                <td><?= $this->Number->format($linkMaster->link_type) ?></td>
                <td><?= $this->Number->format($linkMaster->order_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $linkMaster->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $linkMaster->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $linkMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $linkMaster->id)]) ?>
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
