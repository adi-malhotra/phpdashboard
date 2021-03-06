<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleMaster $roleMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Role Master'), ['action' => 'edit', $roleMaster->role_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Role Master'), ['action' => 'delete', $roleMaster->role_id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleMaster->role_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Role Master'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roleMaster view large-9 medium-8 columns content">
    <h3><?= h($roleMaster->role_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Role Desc') ?></th>
            <td><?= h($roleMaster->role_desc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($roleMaster->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($roleMaster->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role Id') ?></th>
            <td><?= $this->Number->format($roleMaster->role_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($roleMaster->creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified Date') ?></th>
            <td><?= h($roleMaster->modified_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $roleMaster->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
