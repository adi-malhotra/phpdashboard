<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleLinkMap $roleLinkMap
 */
?>
<div style="padding:10px;">
<div class="btn btn-block btn-info" style = "width:10%;"><i class = "fa fa-arrow-circle-left"></i> <?= $this->Html->link(__('Go Back'), ['action' => 'index']) ?></div>
<div class="roleLinkMap form large-9 medium-8 columns content">
  <div class="box" style = "margin-left:-12px;margin-right:-12px;">
    <div class="box-header with-border">
      <h3 class="box-title">Add Role Link Map</h3>
    </div>
    <?= $this->Form->create($roleLinkMap) ?>
    <div class="box-body">
      <div class="form-group">
        <label for="link_id" class="col-sm-2">Link ID</label>
        <?= $this->Form->select('link_id',$links,["default"=>$roleLinkMap->link_id,"empty"=>true]) ?>
      </div>
      <div class="form-group">
        <label for="role_id" class="col-sm-2">Role ID</label>
        <?= $this->Form->select('role_id',$roles,["default"=>$roleLinkMap->role_id,"empty"=>true]) ?>
      </div>
      <div class="form-group">
        <label for="is_active" class="col-sm-2">Is Active</label>
        <?= $this->Form->checkbox('is_active') ?>
      </div>
    </div>
    <div class="box-footer">
      <?= $this->Form->button(__('Submit')) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
