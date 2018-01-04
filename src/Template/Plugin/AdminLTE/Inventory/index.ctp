<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory[]|\Cake\Collection\CollectionInterface $inventory
 */
?>
<div class="inventory index large-9 medium-8 columns content">
  <div class="box">
    <div class="box-header with-border">
      <h3><?= __('Inventory') ?></h3>
    </div>
    <div class="box-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="text-align:center"><?= $this->Paginator->sort('application_id') ?></th>
                <th style="text-align:center"><?= $this->Paginator->sort('quantity') ?></th>
                <th style="text-align:center"><?= $this->Paginator->sort('transaction_date') ?></th>
                <th style="text-align:center" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inventory as $inventory): ?>
            <tr>
                <td align = "center"><?= $this->Html->link($inventory->application_master->application_name, ['controller' => 'ApplicationMaster', 'action' => 'view', $inventory->application_id]) ?></td>
                <td align = "center"><?= $this->Number->format($inventory->quantity) ?></td>
                <td align = "center"><?= h($inventory->transaction_date) ?></td>
                <td class="actions" align ="center" style="width:15%">
                    <span class="btn btn-block btn-info" style = "width: 50%;"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $inventory->id]) ?></span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
</div>
