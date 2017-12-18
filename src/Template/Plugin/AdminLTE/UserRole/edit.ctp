<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRole $userRole
 */
?>
<div style="padding:10px;">
<div class = "btn btn-block btn-info" style= "float:right; width: 10%;">
  <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userRole->role_sl_no],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userRole->role_sl_no)]
            )
  ?>
</div>
<div class="btn btn-block btn-info" style = "width:10%;"><i class = "fa fa-arrow-circle-left"></i> <?= $this->Html->link(__('Go Back'), ['action' => 'index']) ?></div>
<div class="userRole form large-9 medium-8 columns content">
  <div class="box" style = "margin-left:-12px;margin-right:-12px;">
    <div class="box-header with-border">
      <h3 class="box-title">Edit User Role <?= $userRole->role_sl_no ?></h3>
    </div>
    <?= $this->Form->create($userRole) ?>
    <div class="box-body">
      <div class="form-group">
        <label for = "auth_user_id" class="col-sm-2 control-label">Auth User ID</label>
        <div class="col-sm-10">
          <?= $this->Form->select("auth_user_id",$users,["default"=>$userRole->auth_user_id,"empty"=>true]) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "role_id" class="col-sm-2 control-label">Role ID</label>
        <div class="col-sm-10">
          <?= $this->Form->select("role_id",$roles,["default"=>$userRole->role_id,"empty"=>true]) ?>
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
