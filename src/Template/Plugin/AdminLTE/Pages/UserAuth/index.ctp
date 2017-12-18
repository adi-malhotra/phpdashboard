<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAuth[]|\Cake\Collection\CollectionInterface $userAuth
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Auth'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userAuth index large-9 medium-8 columns content">
    <h3><?= __('User Auth') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('login_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emp_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('from_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('to_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_admin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('session_token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('org_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userAuth as $userAuth): ?>
            <tr>
                <td><?= h($userAuth->login_id) ?></td>
                <td><?= h($userAuth->password) ?></td>
                <td><?= $this->Number->format($userAuth->emp_code) ?></td>
                <td><?= $this->Number->format($userAuth->created_by) ?></td>
                <td><?= h($userAuth->created_date) ?></td>
                <td><?= $this->Number->format($userAuth->modified_by) ?></td>
                <td><?= h($userAuth->modified_date) ?></td>
                <td><?= h($userAuth->from_date) ?></td>
                <td><?= h($userAuth->to_date) ?></td>
                <td><?= h($userAuth->is_active) ?></td>
                <td><?= h($userAuth->is_admin) ?></td>
                <td><?= $this->Number->format($userAuth->session_token) ?></td>
                <td><?= $this->Number->format($userAuth->org_id) ?></td>
                <td><?= $this->Number->format($userAuth->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userAuth->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userAuth->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userAuth->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAuth->user_id)]) ?>
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
