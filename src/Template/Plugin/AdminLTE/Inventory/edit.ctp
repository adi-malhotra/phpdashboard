<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory $inventory
 */
?>
<div style="padding:10px;">
<div class = "btn btn-block btn-danger" style= "float:right; width: 10%;">
  <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inventory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->id)]
            )
  ?>
</div>
<div class="btn btn-block btn-info" style = "width:10%;"><i class = "fa fa-arrow-circle-left"></i> <?= $this->Html->link(__('Go Back'), ['action' => 'index']) ?></div>
<div class="inventory form large-9 medium-8 columns content">
  <div class="box" style = "margin-left:-12px;margin-right:-12px;">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Inventory Entry <?= $inventory->id ?></h3>
    </div>
    <?= $this->Form->create($inventory) ?>
    <div class="box-body">
      <div class="form-group">
        <label for = "application_name" class="col-sm-2 control-label">Item Name</label>
        <div class="col-sm-10">
          <?= $this->Form->select("application_id",$applications,["default"=>$inventory->application_id]) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "quantity" class="col-sm-2 control-label">Quantity</label>
        <div class="col-sm-10">
          <?= $this->Form->select("quantity",["default"=>$inventory->quantity]) ?>
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
