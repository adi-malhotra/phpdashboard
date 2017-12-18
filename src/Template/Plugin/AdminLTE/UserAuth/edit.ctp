<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAuth $userAuth
 */
?>
<div style="padding:10px;">
<div class = "btn btn-block btn-info" style= "float:right; width: 10%;">
  <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userAuth->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userAuth->user_id)]
            )
  ?>
</div>
<div class="btn btn-block btn-info" style = "width:10%;"><i class = "fa fa-arrow-circle-left"></i> <?= $this->Html->link(__('Go Back'), ['action' => 'index']) ?></div>
<div class="userAuth form large-9 medium-8 columns content">
  <div class="box" style = "margin-left:-12px;margin-right:-12px;">
    <div class="box-header with-border">
      <h3 class="box-title">Edit User Auth <?= $userAuth->user_id ?></h3>
    </div>
    <?= $this->Form->create($userAuth) ?>
    <div class="box-body">
      <div class="form-group">
        <label for = "login_id" class="col-sm-2 control-label">Login Email ID</label>
        <div class="col-sm-10">
          <?= $this->Form->text("login_id",["default"=>$userAuth->login_id]) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <?= $this->Form->password("login_id",["default"=>$userAuth->password]) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "emp_code" class="col-sm-2 control-label">Employee Code</label>
        <div class="col-sm-10">
          <?= $this->Form->text("emp_code",["default"=>$userAuth->emp_code]) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "from_date" class="col-sm-2 control-label">From:</label>
        <div class="col-sm-10">
          <?= $this->Form->dateTime("from_date",["default"=>$userAuth->from_date,"empty"=>false]) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "to_date" class="col-sm-2 control-label">To:</label>
        <div class="col-sm-10">
          <?= $this->Form->dateTime("to_date",["default"=>$userAuth->to_date,"empty"=>false]) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "from_date" class="col-sm-2 control-label">Is Active</label>
        <div class="col-sm-10">
          <?= $this->Form->checkbox("is_active") ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "is_admin" class="col-sm-2 control-label">Is Admin</label>
        <div class="col-sm-10">
          <?= $this->Form->checkbox("is_admin") ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "session_token" class="col-sm-2 control-label">Session Token</label>
        <div class="col-sm-10">
          <?= $this->Form->text("session_token",["default"=>$userAuth->session_token]) ?>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for = "org_id" class="col-sm-2 control-label">Organisation ID</label>
        <div class="col-sm-10">
          <?= $this->Form->text("org_id",["default"=>$userAuth->org_id]) ?>
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
