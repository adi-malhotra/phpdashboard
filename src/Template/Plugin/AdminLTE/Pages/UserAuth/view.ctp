<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAuth $userAuth
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Auth'), ['action' => 'edit', $userAuth->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Auth'), ['action' => 'delete', $userAuth->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAuth->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Auth'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Auth'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userAuth view large-9 medium-8 columns content">
    <h3><?= h($userAuth->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Login Id') ?></th>
            <td><?= h($userAuth->login_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($userAuth->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emp Code') ?></th>
            <td><?= $this->Number->format($userAuth->emp_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($userAuth->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($userAuth->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Session Token') ?></th>
            <td><?= $this->Number->format($userAuth->session_token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Org Id') ?></th>
            <td><?= $this->Number->format($userAuth->org_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($userAuth->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created Date') ?></th>
            <td><?= h($userAuth->created_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified Date') ?></th>
            <td><?= h($userAuth->modified_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('From Date') ?></th>
            <td><?= h($userAuth->from_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('To Date') ?></th>
            <td><?= h($userAuth->to_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $userAuth->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Admin') ?></th>
            <td><?= $userAuth->is_admin ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
