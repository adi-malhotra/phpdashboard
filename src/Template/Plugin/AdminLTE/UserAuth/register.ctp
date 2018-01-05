<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAuth $userAuth
 */
?>
<div style="padding:10px;">
<div class="btn btn-block btn-info" style = "width:10%;"><i class = "fa fa-arrow-circle-left"></i> <?= $this->Html->link(__('Go Back'), ['action' => 'index']) ?></div>
<div class="userAuth form large-9 medium-8 columns content">
  <div class="box" style = "margin-left:-12px;margin-right:-12px;">
    <div class="box-header with-border">
      <h3 class="box-title">Add User</h3>
    </div>
    <?= $this->Form->create() ?>
    <div class="box-body">
      <div class="form-group">
        <label for = "login_id" class="col-sm-2 control-label">Login Email ID</label>
        <div class="col-sm-10">
          <?= $this->Form->text("login_id") ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <?= $this->Form->password("password") ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "emp_code" class="col-sm-2 control-label">Employee Code</label>
        <div class="col-sm-10">
          <?= $this->Form->text("emp_code") ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "org_id" class="col-sm-2 control-label">Organisation ID</label>
        <div class="col-sm-10">
          <?= $this->Form->text("org_id") ?>
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
