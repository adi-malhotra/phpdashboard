<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<div style="padding:10px;">
<div class="btn btn-block btn-info" style = "width:10%;"><i class = "fa fa-arrow-circle-left"></i> <?= $this->Html->link(__('Go Back'), ['action' => 'index']) ?></div>
<div class="requests form large-9 medium-8 columns content">
  <div class="box" style = "margin-left:-12px;margin-right:-12px;">
    <div class="box-header with-border">
      <h3 class="box-title">Add Request</h3>
    </div>
    <?= $this->Form->create($request) ?>
    <div class="box-body">
      <div class="form-group">
        <label for = "application_id" class="col-sm-2 control-label">Item Name</label>
        <div class="col-sm-10">
          <?= $this->Form->select("application_id",$applications) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "quantity" class="col-sm-2 control-label">Quantity</label>
        <div class="col-sm-10">
          <?= $this->Form->text("quantity") ?>
        </div>
      </div>
      <br>
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
