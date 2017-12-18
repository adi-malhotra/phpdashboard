<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationMaster $applicationMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $applicationMaster->application_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $applicationMaster->application_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Application Master'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="applicationMaster form large-9 medium-8 columns content">
    <?= $this->Form->create($applicationMaster) ?>
    <fieldset>
        <legend><?= __('Edit Application Master') ?></legend>
        <?php
            echo $this->Form->control('application_name');
            echo $this->Form->control('is_active');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
