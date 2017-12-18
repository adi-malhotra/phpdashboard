<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAuth $userAuth
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
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userAuth->user_id]) ?>
    </div>
  </div>
  <div class = "col-md-4"  style= "margin:0 0 0 80;">
    <div class="small-box bg-red" style="text-align:center; font-size: 1.2em;padding:10px;">
      <i class = "fa fa-trash"></i>
      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userAuth->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAuth->user_id)]) ?>
    </div>
  </div>
</div>
<div class="userAuth view large-9 medium-8 columns content">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3><?= h($userAuth->user_id) ?></h3>
    </div>
    <div class="box-body">
      <dl class="dl-horizontal">
            <dt scope="row"><?= __('Login Id') ?></dt>
            <dd><?= h($userAuth->login_id) ?></dd>
            <dt scope="row"><?= __('Emp Code') ?></dt>
            <dd><?= $this->Number->format($userAuth->emp_code) ?></dd>
            <dt scope="row"><?= __('Created By') ?></dt>
            <dd><?= $this->Number->format($userAuth->created_by) ?></dd>
            <dt scope="row"><?= __('Modified By') ?></dt>
            <dd><?= $this->Number->format($userAuth->modified_by) ?></dd>
            <dt scope="row"><?= __('Session Token') ?></dt>
            <dd><?= $this->Number->format($userAuth->session_token) ?></dd>
            <dt scope="row"><?= __('Org Id') ?></dt>
            <dd><?= $this->Number->format($userAuth->org_id) ?></dd>
            <dt scope="row"><?= __('Created Date') ?></dt>
            <dd><?= h($userAuth->created_date) ?></dd>
            <dt scope="row"><?= __('Modified Date') ?></dt>
            <dd><?= h($userAuth->modified_date) ?></dd>
            <dt scope="row"><?= __('From Date') ?></dt>
            <dd><?= h($userAuth->from_date) ?></dd>
            <dt scope="row"><?= __('To Date') ?></dt>
            <dd><?= h($userAuth->to_date) ?></dd>
            <dt scope="row"><?= __('Is Active') ?></dt>
            <dd><?= $userAuth->is_active ? __('Yes') : __('No'); ?></dd>
            <dt scope="row"><?= __('Is Admin') ?></dt>
            <dd><?= $userAuth->is_admin ? __('Yes') : __('No'); ?></dd>
      </dl>
    </div>
  </div>
</div>
</div>
