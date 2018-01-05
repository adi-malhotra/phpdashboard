<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAuth $userAuth
 */
?>
<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <?= $this->Form->create() ?>
        <div class="form-group has-feedback">
          <?= $this->Form->input("login_id",["type"=>"text","placeholder"=>"Email"]) ?>
        </div>
        <div class="form-group has-feedback">
          <?= $this->Form->input("password",["type"=>"password","placeholder"=>"Password"]) ?>
        </div>
        <div class="text-center">
          <?= $this->Form->button(__('Submit')) ?>
        </div>
      </form>
      <br/>
      <div class="text-center"><?= $this->Html->link(__('Register a new membership'), ['action' => 'register']) ?></div>
    </div>
  </div>
</body>
