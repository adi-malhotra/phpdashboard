<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleMaster $roleMaster
 */
?>
<div style="padding:10px;">
<div class = "btn btn-block btn-info" style= "float:right; width: 10%;">
  <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $roleMaster->role_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $roleMaster->role_id)]
            )
  ?>
</div>
<div class="btn btn-block btn-info" style = "width:10%;"><i class = "fa fa-arrow-circle-left"></i> <?= $this->Html->link(__('Go Back'), ['action' => 'index']) ?></div>
<div class="roleMaster form large-9 medium-8 columns content">
  <div class="box" style = "margin-left:-12px;margin-right:-12px;">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Role <?= $roleMaster->role_id ?></h3>
    </div>
    <?= $this->Form->create($roleMaster) ?>
    <div class="box-body">
      <div class="form-group">
        <label for = "role_desc" class="col-sm-2 control-label">Role Description</label>
        <div class="col-sm-10">
          <?= $this->Form->text("role_desc",["default"=>$roleMaster->role_desc]) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "is_active" class="col-sm-2 control-label">Is Active</label>
        <div class="col-sm-10">
          <?= $this->Form->checkbox("is_active") ?>
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
