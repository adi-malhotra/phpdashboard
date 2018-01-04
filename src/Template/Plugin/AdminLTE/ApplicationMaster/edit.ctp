<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationMaster $applicationMaster
 */
?>
<div style="padding:10px;">
<div class = "btn btn-block btn-danger" style= "float:right; width: 10%;">
  <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $applicationMaster->application_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $applicationMaster->application_id)]
            )
  ?>
</div>
<div class="btn btn-block btn-info" style = "width:10%;"><i class = "fa fa-arrow-circle-left"></i> <?= $this->Html->link(__('Go Back'), ['action' => 'index']) ?></div>
<div class="applicationMaster form large-9 medium-8 columns content">
  <div class="box" style = "margin-left:-12px;margin-right:-12px;">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Item <?= $applicationMaster->application_id ?></h3>
    </div>
    <?= $this->Form->create($applicationMaster) ?>
      <div class="box-body">
        <div class="form-group">
          <label for = "application_name" class="col-sm-2 control-label">Item Name</label>
          <div class="col-sm-10">
            <?= $this->Form->text("application_name",["default"=>$applicationMaster->application_name]) ?>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label for = "description" class="col-sm-2 control-label">Description</label>
          <div class="col-sm-10">
            <?= $this->Form->text("description",["default"=>$applicationMaster->description]) ?>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label for = "quantity" class="col-sm-2 control-label">Quantity</label>
          <div class="col-sm-10">
            <?= $this->Form->text("quantity",["default"=>$applicationMaster->quantity]) ?>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label for = "is_active" class="col-sm-2 control-label">Is Active</label>
          <div class="col-sm-10">
            <?=  $this->Form->checkbox("is_active")?>
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
