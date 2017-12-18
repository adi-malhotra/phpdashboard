<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRole $userRole
 */
?>
<div style = "padding:10px;">
<div class="row">
  <div class = "col-md-4" style= "margin:0 80 0 0;">
    <div class="small-box bg-aqua" style="text-align:center;font-size: 1.2em;padding:10px;">
        <i class = "fa fa-arrow-circle-left"></i>
    <?= $this->Html->link('Go Back', ['action' => 'index']) ?>
    </div>
  </div>
  <div class = "col-md-4"  style= "margin:0 80 0;">
    <div class="small-box bg-aqua" style="text-align:center; font-size: 1.2em;padding:10px;">
      <i class = "fa fa-edit"></i>
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userRole->role_sl_no]) ?>
    </div>
  </div>
  <div class = "col-md-4"  style= "margin:0 0 0 80;">
    <div class="small-box bg-red" style="text-align:center; font-size: 1.2em;padding:10px;">
      <i class = "fa fa-trash"></i>
      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userRole->role_sl_no], ['confirm' => __('Are you sure you want to delete # {0}?', $userRole->role_sl_no)]) ?>
    </div>
  </div>
</div>
<div class="userRole view large-9 medium-8 columns content">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3><?= h($userRole->role_sl_no) ?></h3>
    </div>
    <div class="box-body">
      <dl class="dl-horizontal">
            <dt scope="row"><?= __('User Auth') ?></dt>
            <dd><?= $this->Html->link($userRole->user_auth->login_id, ['controller' => 'UserAuth', 'action' => 'view', $userRole->auth_user_id])?></dd>
            <dt scope="row"><?= __('Role Master') ?></dt>
            <dd><?= $this->Html->link($userRole->role_master->role_desc, ['controller' => 'RoleMaster', 'action' => 'view', $userRole->role_id])  ?></dd>
            <dt scope="row"><?= __('Created By') ?></dt>
            <dd><?= $this->Number->format($userRole->created_by) ?></dd>
            <dt scope="row"><?= __('Modified By') ?></dt>
            <dd><?= $this->Number->format($userRole->modified_by) ?></dd>
            <dt scope="row"><?= __('Role Sl No') ?></dt>
            <dd><?= $this->Number->format($userRole->role_sl_no) ?></dd>
            <dt scope="row"><?= __('Created Date') ?></dt>
            <dd><?= h($userRole->created_date) ?></dd>
            <dt scope="row"><?= __('Modified Date') ?></dt>
            <dd><?= h($userRole->modified_date) ?></dd>
            <dt scope="row"><?= __('Is Active') ?></dt>
            <dd><?= $userRole->is_active ? __('Yes') : __('No'); ?></dd>
      </dl>
    </div>
  </div>
</div>
</div>
