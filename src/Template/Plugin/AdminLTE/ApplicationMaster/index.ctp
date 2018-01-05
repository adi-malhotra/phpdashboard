<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationMaster[]|\Cake\Collection\CollectionInterface $applicationMaster
 */
?>
<div class="applicationMaster index large-9 medium-8 columns content">
  <div class="box">
    <div class="box-header with-border">
      <h3><?= __('Stock Master') ?></h3>
    </div>
    <div class = "box-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style = "text-align:center"><?= $this->Paginator->sort('application_name') ?></th>
                <th style = "text-align:center"><?= $this->Paginator->sort('is_active') ?></th>
                <th style = "text-align:center"><?= $this->Paginator->sort('quantity') ?></th>
                <th style = "text-align:center"><?= $this->Paginator->sort('item_type') ?></th>
                <th style = "text-align:center" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applicationMaster as $applicationMaster): ?>
            <tr>
                <td align = "center"><?= $this->Html->link($applicationMaster->application_name, ['action' => 'view', $applicationMaster->application_id]) ?></td>
                <td align ="center">
                <?php if($applicationMaster->is_active) {?><span class = "label label-success">Active</span></td>
                <?php } else {?><span class = "label label-danger">Inactive</span></td><?php }?>
                <td align = "center"><?= h($applicationMaster->quantity) ?></td>
                <td align = "center"><?= $applicationMaster->has('item_type_master')? h($applicationMaster->item_type_master->item_type_desc): '' ?></td>
                <td class="actions" align ="center" style="width:15%">
                    <span class="btn btn-block btn-info" style = "width: 50%;"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $applicationMaster->application_id]) ?></span>
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
        <div class="btn btn-block btn-primary" style = "background: white; font-size:1.2em; margin: auto; width:85%;"><?= $this->Html->link(__('New Item'), ['controller'=>'ApplicationMaster','action' => 'add']) ?></div><br>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
</div>
