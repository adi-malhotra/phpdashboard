<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationMaster[]|\Cake\Collection\CollectionInterface $applicationMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Application Master'), ['controller'=>'ApplicationMaster','action' => 'add']) ?></li>
    </ul>
</nav>
<div class="applicationMaster index large-9 medium-8 columns content">
    <h3><?= __('Application Master') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('application_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('application_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applicationMaster as $applicationMaster): ?>
            <tr>
                <td><?= $this->Number->format($applicationMaster->application_id) ?></td>
                <td><?= h($applicationMaster->application_name) ?></td>
                <td><?= h($applicationMaster->is_active) ?></td>
                <td><?= $this->Number->format($applicationMaster->created_by) ?></td>
                <td><?= h($applicationMaster->creation_date) ?></td>
                <td><?= $this->Number->format($applicationMaster->modified_by) ?></td>
                <td><?= h($applicationMaster->modified_date) ?></td>
                <td><?= h($applicationMaster->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $applicationMaster->application_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $applicationMaster->application_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $applicationMaster->application_id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicationMaster->application_id)]) ?>
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
