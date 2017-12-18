<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleMaster $roleMaster
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
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roleMaster->role_id]) ?>
    </div>
  </div>
  <div class = "col-md-4"  style= "margin:0 0 0 80;">
    <div class="small-box bg-red" style="text-align:center; font-size: 1.2em;padding:10px;">
      <i class = "fa fa-trash"></i>
      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roleMaster->role_id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleMaster->role_id)]) ?>
    </div>
  </div>
</div>
<div class="roleMaster view large-9 medium-8 columns content">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3><?= h($roleMaster->role_id) ?></h3>
    </div>
    <div class="box-body">
      <dl class="dl-horizontal">
            <dt scope="row"><?= __('Role Desc') ?></dt>
            <dd><?= h($roleMaster->role_desc) ?></dd>
            <dt scope="row"><?= __('Created By') ?></dt>
            <dd><?= $this->Number->format($roleMaster->created_by) ?></dd>
            <dt scope="row"><?= __('Modified By') ?></dt>
            <dd><?= $this->Number->format($roleMaster->modified_by) ?></dd>
            <dt scope="row"><?= __('Role Id') ?></dt>
            <dd><?= $this->Number->format($roleMaster->role_id) ?></dd>
            <dt scope="row"><?= __('Creation Date') ?></dt>
            <dd><?= h($roleMaster->creation_date) ?></dd>
            <dt scope="row"><?= __('Modified Date') ?></dt>
            <dd><?= h($roleMaster->modified_date) ?></dd>
            <dt scope="row"><?= __('Is Active') ?></dt>
            <dd><?= $roleMaster->is_active ? __('Yes') : __('No'); ?></dd>
      </dl>
    </div>
  </div>
</div>
</div>
