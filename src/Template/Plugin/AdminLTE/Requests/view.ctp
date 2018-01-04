<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
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
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $request->id]) ?>
    </div>
  </div>
  <div class = "col-md-4"  style= "margin:0 0 0 80;">
    <div class="small-box bg-red" style="text-align:center; font-size: 1.2em;padding:10px;">
      <i class = "fa fa-trash"></i>
      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $request->id], ['confirm' => __('Are you sure you want to delete # {0}?', $request->id)]) ?>
    </div>
  </div>
</div>
<div class="requests view large-9 medium-8 columns content">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3><?= h($request->id) ?></h3>
    </div>
    <div class="box-body">
      <dl class="dl-horizontal">
        <dt scope="row"><?= __('Application Name') ?></dt>
        <dd><?= $this->Html->link($request->application_master->application_name, ['controller' => 'ApplicationMaster', 'action' => 'view', $request->application_id]); ?></dd>
        <dt scope="row"><?= __('Id') ?></dt>
        <dd><?= $this->Number->format($request->id) ?></dd>
        <dt scope="row"><?= __('Quantity') ?></dt>
        <dd><?= $this->Number->format($request->quantity) ?></dd>
        <dt scope="row"><?= __('Request Status') ?></dt>
        <dd><?= $request->request_status ? __('Yes') : __('No'); ?></dd>
      </dl>
    </div>
  </div>
</div>
</div>
