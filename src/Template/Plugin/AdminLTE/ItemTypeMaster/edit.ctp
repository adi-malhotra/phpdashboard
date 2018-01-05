<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemTypeMaster $itemTypeMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $itemTypeMaster->item_type_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itemTypeMaster->item_type_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Item Type Master'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="itemTypeMaster form large-9 medium-8 columns content">
    <?= $this->Form->create($itemTypeMaster) ?>
    <fieldset>
        <legend><?= __('Edit Item Type Master') ?></legend>
        <?php
            echo $this->Form->control('item_type_desc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
