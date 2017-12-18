<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleLinkMap $roleLinkMap
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
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roleLinkMap->id]) ?>
    </div>
  </div>
  <div class = "col-md-4"  style= "margin:0 0 0 80;">
    <div class="small-box bg-red" style="text-align:center; font-size: 1.2em;padding:10px;">
      <i class = "fa fa-trash"></i>
      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roleLinkMap->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleLinkMap->id)]) ?>
    </div>
  </div>
</div>
<div class="roleLinkMap view large-9 medium-8 columns content">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3><?= h($roleLinkMap->id) ?></h3>
    </div>
    <div class="box-body">
      <dl class="dl-horizontal">
            <dt scope="row"><?= __('Link Master') ?></dt>
            <dd><?= $this->Html->link($roleLinkMap->link_master->link_name, ['controller' => 'LinkMaster', 'action' => 'view', $roleLinkMap->link_id]) ?></dd>
            <dt scope="row"><?= __('Role Master') ?></dt>
            <dd><?= $this->Html->link($roleLinkMap->role_master->role_desc, ['controller' => 'RoleMaster', 'action' => 'view', $roleLinkMap->role_id]) ?></dd>
            <dt scope="row"><?= __('Is Active') ?></dt>
            <dd><?= $roleLinkMap->is_active ? __('Yes') : __('No'); ?></dd>
        </dl>
      </div>
    </div>
  </div>
</div>
