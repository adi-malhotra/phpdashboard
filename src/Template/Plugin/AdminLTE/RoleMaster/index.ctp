<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleMaster[]|\Cake\Collection\CollectionInterface $roleMaster
 */
?>
<div class="roleMaster index large-9 medium-8 columns content">
  <div class="box">
    <div class="box-header with-border">
      <h3><?= __('Role Master') ?></h3>
    </div>
    <div class="box-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style = "text-align:center"><?= $this->Paginator->sort('role_desc') ?></th>
                <th style = "text-align:center"><?= $this->Paginator->sort('is_active') ?></th>
                <th style = "text-align:center" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roleMaster as $roleMaster): ?>
            <tr>
                <td align = "center"><?= $this->Html->link($roleMaster->role_desc, ['action' => 'view', $roleMaster->role_id]) ?></td>
                <td align ="center">
                <?php if($roleMaster->is_active) {?><span class = "label label-success">Active</span></td>
                <?php } else {?><span class = "label label-danger">Inactive</span></td><?php }?>
                <td align = "center" style="width:25%"class="actions">
                    <span class="btn btn-block btn-info" style = "width: 30%;"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $roleMaster->role_id]) ?></span>
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
        <div class="btn btn-block btn-primary" style = "background: white; font-size:1.2em; margin: auto; width:85"><?= $this->Html->link(__('New Role Master'), ['action' => 'add']) ?></div><br>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
</div>
