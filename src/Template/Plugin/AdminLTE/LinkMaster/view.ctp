<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinkMaster $linkMaster
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
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $linkMaster->id]) ?>
    </div>
  </div>
  <div class = "col-md-4"  style= "margin:0 0 0 80;">
    <div class="small-box bg-red" style="text-align:center; font-size: 1.2em;padding:10px;">
      <i class = "fa fa-trash"></i>
      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $linkMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $linkMaster->id)]) ?>
    </div>
  </div>
</div>
<div class="linkMaster view large-9 medium-8 columns content">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3><?= h($linkMaster->id) ?></h3>
    </div>
    <div class="box-body">
      <dl class="dl-horizontal">
            <dt scope="row"><?= __('Link Url') ?></dt>
            <dd><?= h($linkMaster->link_url) ?></dd>
            <dt scope="row"><?= __('Link Name') ?></dt>
            <dd><?= h($linkMaster->link_name) ?></dd>
            <dt scope="row"><?= __('Application Master') ?></dt>
            <dd><?= $this->Html->link($linkMaster->application_master->application_name, ['controller' => 'ApplicationMaster', 'action' => 'view', $linkMaster->application_id]); ?></dd>
            <dt scope="row"><?= __('Link Description') ?></dt>
            <dd><?= h($linkMaster->link_description) ?></dd>
            <dt scope="row"><?= __('Created By') ?></dt>
            <dd><?= $this->Number->format($linkMaster->created_by) ?></dd>
            <dt scope="row"><?= __('Link Type') ?></dt>
            <dd><?= $this->Number->format($linkMaster->link_type) ?></dd>
            <dt scope="row"><?= __('Parent Link Id') ?></dt>
            <dd><?= h($linkMaster->parent_link_id) ?></dd>
            <dt scope="row"><?= __('Order Id') ?></dt>
            <dd><?= $this->Number->format($linkMaster->order_id) ?></dd>
            <dt scope="row"><?= __('Created At') ?></dt>
            <dd><?= h($linkMaster->created_at) ?></dd>
            <dt scope="row"><?= __('Is Active') ?></dt>
            <dd><?= $linkMaster->is_active ? __('Yes') : __('No'); ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
