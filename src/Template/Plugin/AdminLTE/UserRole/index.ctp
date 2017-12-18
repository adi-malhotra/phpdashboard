<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRole[]|\Cake\Collection\CollectionInterface $userRole
 */
?>
<div class="userRole index large-9 medium-8 columns content">
  <div class="box">
  <div class="box-header with-border">
    <h3><?= __('User Role') ?></h3>
  </div>
  <div class="box-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 100px;text-align:center;"><?= $this->Paginator->sort('role_sl_no') ?></th>
                <th style="text-align:center;" ><?= $this->Paginator->sort('auth_user_id') ?></th>
                <th style="text-align:center;"><?= $this->Paginator->sort('role_id') ?></th>
                <th style="text-align:center;"><?= $this->Paginator->sort('is_active') ?></th>
                <th class="actions" style="text-align:center;"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userRole as $userRole): ?>
            <tr>
                <td align ="center"><?= $this->Html->link($this->Number->format($userRole->role_sl_no), ['action' => 'view', $userRole->role_sl_no]) ?></td>
                <td align ="center"><?= $this->Html->link($userRole->user_auth->login_id, ['controller' => 'UserAuth', 'action' => 'view', $userRole->auth_user_id])  ?></td>
                <td align ="center"><?= $this->Html->link($userRole->role_master->role_desc, ['controller' => 'RoleMaster', 'action' => 'view', $userRole->role_id]) ?></td>
                <td align ="center">
                <?php if($userRole->is_active) {?><span class = "label label-success">Active</span></td>
                <?php } else {?><span class = "label label-danger">Inactive</span></td><?php }?>
                <td class="actions" align ="center" style="width:15%">
                    <span class="btn btn-block btn-info" style = "width: 50%;"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $userRole->role_sl_no]) ?></span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <div class="btn btn-block btn-primary" style = "background: white; font-size:1.2em; margin: auto; width:85%;"><?= $this->Html->link('Add user role', ['action' => 'add']) ?></div><br>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
  </div>
</div>
