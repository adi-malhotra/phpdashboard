<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationMaster $applicationMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Application Master'), ['action' => 'edit', $applicationMaster->application_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Application Master'), ['action' => 'delete', $applicationMaster->application_id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicationMaster->application_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Application Master'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="applicationMaster view large-9 medium-8 columns content">
    <h3><?= h($applicationMaster->application_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Application Name') ?></th>
            <td><?= h($applicationMaster->application_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($applicationMaster->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Application Id') ?></th>
            <td><?= $this->Number->format($applicationMaster->application_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($applicationMaster->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($applicationMaster->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($applicationMaster->creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified Date') ?></th>
            <td><?= h($applicationMaster->modified_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $applicationMaster->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
