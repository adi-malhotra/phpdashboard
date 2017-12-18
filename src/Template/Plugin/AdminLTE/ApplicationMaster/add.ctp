<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationMaster $applicationMaster
 */
?>
<div style="padding:10px;">
<div class="btn btn-block btn-info" style = "width:10%;"><i class = "fa fa-arrow-circle-left"></i> <?= $this->Html->link(__('Go Back'), ['action' => 'index']) ?></div>
<div class="applicationMaster form large-9 medium-8 columns content">
  <div class="box" style = "margin-left:-12px;margin-right:-12px;">
    <div class="box-header with-border">
      <h3 class="box-title">Add Application</h3>
    </div>
    <?= $this->Form->create($applicationMaster) ?>
    <div class="box-body">
      <div class="form-group">
        <label for = "application_name" class="col-sm-2 control-label">Application Name</label>
        <div class="col-sm-10">
          <?= $this->Form->text("application_name") ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "is_active" class="col-sm-2 control-label">Is Active</label>
        <div class="col-sm-10">
          <?=  $this->Form->checkbox("is_active")?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "description" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
          <?= $this->Form->text("description",["default"=>$applicationMaster->description]) ?>
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
