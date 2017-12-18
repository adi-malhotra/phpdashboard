<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleLinkMap[]|\Cake\Collection\CollectionInterface $roleLinkMap
 */
?>
<div class="roleLinkMap index large-9 medium-8 columns content">
  <div class="box">
    <div class="box-header with-border">
    <h3><?= __('Role Link Map') ?></h3>
    </div>
  <div class="box-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="text-align:center;"><?= $this->Paginator->sort('id') ?></th>
                <th style="text-align:center;"><?= $this->Paginator->sort('link_id') ?></th>
                <th style="text-align:center;"><?= $this->Paginator->sort('role_id') ?></th>
                <th style="text-align:center;"><?= $this->Paginator->sort('is_active') ?></th>
                <th style="text-align:center;" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roleLinkMap as $roleLinkMap): ?>
            <tr>
                <td align = "center"><?= $this->Html->link($this->Number->format($roleLinkMap->id), ['action' => 'view', $roleLinkMap->id]) ?></td>
                <td align = "center"><?= $this->Html->link($roleLinkMap->link_master->link_name, ['controller' => 'LinkMaster', 'action' => 'view', $roleLinkMap->link_id]) ?></td>
                <td align = "center"><?= $this->Html->link($roleLinkMap->role_master->role_desc, ['controller' => 'RoleMaster', 'action' => 'view', $roleLinkMap->role_id]) ?></td>
                <td align ="center">
                <?php if($roleLinkMap->is_active) {?><span class = "label label-success">Active</span></td>
                <?php } else {?><span class = "label label-danger">Inactive</span></td><?php }?>
                <td class="actions" align ="center" style="width:15%">
                    <span class="btn btn-block btn-info" style = "width: 50%;"><?= $this->Html->link(__('Edit'), ['action' => 'edit',$roleLinkMap->id]) ?></span>
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
        <div class="btn btn-block btn-primary" style = "background: white; font-size:1.2em; margin: auto; width:85%;"><?= $this->Html->link(__('New Role Link Map'), ['action' => 'add']) ?></div><br>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
  </div>
</div>
