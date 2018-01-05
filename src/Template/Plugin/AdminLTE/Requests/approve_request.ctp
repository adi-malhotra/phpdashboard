<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<div style="padding:10px;">
<div class = "btn btn-block btn-danger" style= "float:right; width: 10%;">
  <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $request->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $request->id)]
            )
  ?>
</div>
<div class="btn btn-block btn-info" style = "width:10%;"><i class = "fa fa-arrow-circle-left"></i> <?= $this->Html->link(__('Go Back'), ['action' => 'index']) ?></div>
<div class="requests form large-9 medium-8 columns content">
  <div class="box" style = "margin-left:-12px;margin-right:-12px;">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Request <?= $request->id ?></h3>
    </div>
    <?= $this->Form->create($request) ?>
    <div class="box-body">
      <dl class="dl-horizontal">
        <dt scope="row"><?= __('Application Name') ?></dt>
        <dd><?= h($current->application_master->application_name) ?></dd>
        <dt scope="row"><?= __('Quantity') ?></dt>
        <dd><?= $this->Number->format($current->quantity) ?></dd>
      </dl>
      <div class="form-group">
        <label for = "request_status" class="col-sm-2 control-label">Request Status</label>
        <div class="col-sm-10">
          <?= $this->Form->checkbox("request_status") ?>
        </div>
      </div>
    </div>
    <div class="box-footer">
      <?= $this->Form->button(__('Submit')) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
