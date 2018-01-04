<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory $inventory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Inventory'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="inventory form large-9 medium-8 columns content">
    <?= $this->Form->create($inventory) ?>
    <fieldset>
        <legend><?= __('Add Inventory') ?></legend>
        <?php
            echo $this->Form->control('application_name');
            echo $this->Form->control('quantity');
            echo $this->Form->control('transaction_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
