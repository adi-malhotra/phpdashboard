<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinkMaster $linkMaster
 */
?>
<div style="padding:10px;">
<div class="btn btn-block btn-info" style = "width:10%;"><i class = "fa fa-arrow-circle-left"></i> <?= $this->Html->link(__('Go Back'), ['action' => 'index']) ?></div>
<div class="linkMaster form large-9 medium-8 columns content">
  <div class="box" style = "margin-left:-12px;margin-right:-12px;">
    <div class="box-header with-border">
      <h3 class="box-title">Add Link</h3>
    </div>
    <?= $this->Form->create($linkMaster) ?>
    <div class="box-body">
      <div class="form-group">
        <label for = "link_url" class="col-sm-2 control-label">Link URL</label>
        <div class="col-sm-10">
          <?= $this->Form->text("link_url") ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "link_name" class="col-sm-2 control-label">Link Name</label>
        <div class="col-sm-10">
          <?= $this->Form->text("link_name") ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "is_active" class="col-sm-2 control-label">Is Active</label>
        <div class="col-sm-10">
          <?= $this->Form->checkbox("is_active") ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "application_id" class="col-sm-2 control-label">Application ID</label>
        <div class="col-sm-10">
          <?= $this->Form->select("application_id",$applications,["default"=>$linkMaster->application_id,"empty"=>true]) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "link_description" class="col-sm-2 control-label">Link Description</label>
        <div class="col-sm-10">
          <?= $this->Form->text("link_description",["default"=>$linkMaster->link_description]) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "parent_link_id" class="col-sm-2 control-label">Parent Link ID</label>
        <div class="col-sm-10">
          <?= $this->Form->select("parent_link_id",$links,["default"=>$linkMaster->parent_link_id,"empty"=>true]) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "link_type" class="col-sm-2 control-label">Link Type</label>
        <div class="col-sm-10">
          <?= $this->Form->text("link_type",["default"=>$linkMaster->link_type]) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "order_id" class="col-sm-2 control-label">Order ID</label>
        <div class="col-sm-10">
          <?= $this->Form->text("order_id",["default"=>$linkMaster->order_id]) ?>
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
