<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request[]|\Cake\Collection\CollectionInterface $requests
 */
?>
<div class="requests index large-9 medium-8 columns content">
  <div class="box">
    <div class="box-header with-border">
      <h3><?= __('Requests') ?></h3>
    </div>
    <div class="box-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="text-align:center"><?= $this->Paginator->sort('application_id') ?></th>
                <th style="text-align:center"><?= $this->Paginator->sort('quantity') ?></th>
                <th style="text-align:center"><?= $this->Paginator->sort('request_status') ?></th>
                <th style="text-align:center" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requests as $request): ?>
            <tr>
                <td align = "center"><?= $this->Html->link($request->application_master->application_name, ['controller' => 'ApplicationMaster', 'action' => 'view', $request->application_id]) ?></td>
                <td align = "center"><?= $this->Number->format($request->quantity) ?></td>
                <td align="center">
                <?php if($request->request_status) {?><span class = "label label-success">Granted</span></td>
                <?php } else {?><span class = "label label-danger">Pending</span></td><?php }?>
                <td class="actions" align ="center" style="width:15%">
                    <span class="btn btn-block btn-info" style = "width: 50%;"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $request->id]) ?></span>
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
        <div class="btn btn-block btn-primary" style = "background: white; font-size:1.2em; margin: auto; width:85%;"><?= $this->Html->link(__('New Request'), ['action' => 'add']) ?></div><br>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
</div>
