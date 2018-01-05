<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemTypeMaster $itemTypeMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Item Type Master'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="itemTypeMaster form large-9 medium-8 columns content">
    <?= $this->Form->create($itemTypeMaster) ?>
    <fieldset>
        <legend><?= __('Add Item Type Master') ?></legend>
        <?php
            echo $this->Form->control('item_type_desc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
