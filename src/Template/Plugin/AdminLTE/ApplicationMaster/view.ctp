<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationMaster $applicationMaster
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
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $applicationMaster->application_id]) ?>
    </div>
  </div>
  <div class = "col-md-4"  style= "margin:0 0 0 80;">
    <div class="small-box bg-red" style="text-align:center; font-size: 1.2em;padding:10px;">
      <i class = "fa fa-trash"></i>
      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $applicationMaster->application_id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicationMaster->application_id)]) ?>
    </div>
  </div>
</div>
<div class="applicationMaster view large-9 medium-8 columns content">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3><?= h($applicationMaster->application_id) ?></h3>
    </div>
    <div class="box-body">
      <dl class="dl-horizontal">
            <dt><?= __('Application Name') ?></th>
            <dd><?= h($applicationMaster->application_name) ?></dd>
            <dt scope="row"><?= __('Description') ?></th>
            <dd><?= h($applicationMaster->description) ?></dd>
            <dt scope="row"><?= __('Quantity') ?></th>
            <dd><?= h($applicationMaster->quantity) ?></dd>
            <dt scope="row"><?= __('Created By') ?></th>
            <dd><?= $this->Number->format($applicationMaster->created_by) ?></dd>
            <dt scope="row"><?= __('Modified By') ?></th>
            <dd><?= $this->Number->format($applicationMaster->modified_by) ?></dd>
            <dt scope="row"><?= __('Creation Date') ?></dt>
            <dd><?= h($applicationMaster->creation_date) ?></dd>
            <dt scope="row"><?= __('Modified Date') ?></dt>
            <dd><?= h($applicationMaster->modified_date) ?></dd>
            <dt scope="row"><?= __('Is Active') ?></dt>
            <dd><?= $applicationMaster->is_active ? __('Yes') : __('No'); ?></dd>
        </dl>
      </div>
</div>
</div>
</div>
