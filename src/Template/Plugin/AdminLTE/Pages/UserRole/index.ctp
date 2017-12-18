<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRole[]|\Cake\Collection\CollectionInterface $userRole
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Role'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Auth'), ['controller' => 'UserAuth', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Auth'), ['controller' => 'UserAuth', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Role Master'), ['controller' => 'RoleMaster', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role Master'), ['controller' => 'RoleMaster', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userRole index large-9 medium-8 columns content">
    <h3><?= __('User Role') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('auth_user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_sl_no') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userRole as $userRole): ?>
            <tr>
                <td><?= $userRole->has('user_auth') ? $this->Html->link($userRole->user_auth->user_id, ['controller' => 'UserAuth', 'action' => 'view', $userRole->user_auth->user_id]) : '' ?></td>
                <td><?= $userRole->has('role_master') ? $this->Html->link($userRole->role_master->role_id, ['controller' => 'RoleMaster', 'action' => 'view', $userRole->role_master->role_id]) : '' ?></td>
                <td><?= h($userRole->is_active) ?></td>
                <td><?= $this->Number->format($userRole->created_by) ?></td>
                <td><?= h($userRole->created_date) ?></td>
                <td><?= $this->Number->format($userRole->modified_by) ?></td>
                <td><?= h($userRole->modified_date) ?></td>
                <td><?= $this->Number->format($userRole->role_sl_no) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userRole->role_sl_no]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userRole->role_sl_no]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userRole->role_sl_no], ['confirm' => __('Are you sure you want to delete # {0}?', $userRole->role_sl_no)]) ?>
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
