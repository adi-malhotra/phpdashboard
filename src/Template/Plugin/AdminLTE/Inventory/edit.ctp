<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory $inventory
 */
?>
<div style="padding:10px;">
<div class = "btn btn-block btn-danger" style= "float:right; width: 10%;">
  <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $request->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $request->id)]
            )
  ?>
</div>
<div class="inventory form large-9 medium-8 columns content">
    <?= $this->Form->create($inventory) ?>
    <fieldset>
        <legend><?= __('Edit Inventory') ?></legend>
        <?php
            echo $this->Form->control('application_name');
            echo $this->Form->control('quantity');
            echo $this->Form->control('transaction_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
