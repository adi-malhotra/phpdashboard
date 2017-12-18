<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRole $userRole
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Role'), ['action' => 'edit', $userRole->role_sl_no]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Role'), ['action' => 'delete', $userRole->role_sl_no], ['confirm' => __('Are you sure you want to delete # {0}?', $userRole->role_sl_no)]) ?> </li>
        <li><?= $this->Html->link(__('List User Role'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Auth'), ['controller' => 'UserAuth', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Auth'), ['controller' => 'UserAuth', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Role Master'), ['controller' => 'RoleMaster', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role Master'), ['controller' => 'RoleMaster', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userRole view large-9 medium-8 columns content">
    <h3><?= h($userRole->role_sl_no) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Auth') ?></th>
            <td><?= $userRole->has('user_auth') ? $this->Html->link($userRole->user_auth->user_id, ['controller' => 'UserAuth', 'action' => 'view', $userRole->user_auth->user_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role Master') ?></th>
            <td><?= $userRole->has('role_master') ? $this->Html->link($userRole->role_master->role_id, ['controller' => 'RoleMaster', 'action' => 'view', $userRole->role_master->role_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($userRole->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($userRole->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role Sl No') ?></th>
            <td><?= $this->Number->format($userRole->role_sl_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created Date') ?></th>
            <td><?= h($userRole->created_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified Date') ?></th>
            <td><?= h($userRole->modified_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $userRole->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
