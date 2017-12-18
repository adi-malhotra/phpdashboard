<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAuth $userAuth
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userAuth->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userAuth->user_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Auth'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="userAuth form large-9 medium-8 columns content">
    <?= $this->Form->create($userAuth) ?>
    <fieldset>
        <legend><?= __('Edit User Auth') ?></legend>
        <?php
            echo $this->Form->control('login_id');
            echo $this->Form->control('password');
            echo $this->Form->control('emp_code');
            echo $this->Form->control('created_by');
            echo $this->Form->control('created_date');
            echo $this->Form->control('modified_by');
            echo $this->Form->control('modified_date');
            echo $this->Form->control('from_date');
            echo $this->Form->control('to_date');
            echo $this->Form->control('is_active');
            echo $this->Form->control('is_admin');
            echo $this->Form->control('session_token');
            echo $this->Form->control('org_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
