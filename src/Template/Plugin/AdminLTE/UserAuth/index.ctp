<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAuth[]|\Cake\Collection\CollectionInterface $userAuth
 */
?>
<div class="userAuth index large-9 medium-8 columns content">
    <div class="box">
    <div class="box-header with-border">
      <h3><?= __('User Auth') ?></h3>
    </div>
    <div class="box-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="text-align:center;"><?= $this->Paginator->sort('login_id') ?></th>
                <th style="text-align:center;"><?= $this->Paginator->sort('emp_code') ?></th>
                <th style="text-align:center;"><?= $this->Paginator->sort('is_active') ?></th>
                <th style="text-align:center;"><?= $this->Paginator->sort('is_admin') ?></th>
                <th style="text-align:center;"><?= $this->Paginator->sort('org_id') ?></th>
                <th style="text-align:center;" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userAuth as $userAuth): ?>
            <tr>
                <td align ="center"><?= $this->Html->link($userAuth->login_id, ['action' => 'view', $userAuth->user_id]) ?></td>
                <td align ="center"><?= $this->Number->format($userAuth->emp_code) ?></td>
                <td align ="center">
                <?php if($userAuth->is_active) {?><span class = "label label-success">Active</span></td>
                <?php } else {?><span class = "label label-danger">Inactive</span></td><?php }?>
                <td align ="center">
                <?php if($userAuth->is_admin) {?><span class = "label label-success">Admin</span></td>
              <?php } else {?><span class = "label label-danger">Not Admin</span></td><?php }?>
                <td align ="center"><?= $this->Number->format($userAuth->org_id) ?></td>
                <td class="actions" align ="center" style="width:15%">
                    <span class="btn btn-block btn-info" style = "width: 50%;"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $userAuth->user_id]) ?></span>
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
        <div class="btn btn-block btn-primary" style = "background: white; font-size:1.2em; margin: auto; width:85%;"><?= $this->Html->link(__('New User Auth'), ['action' => 'add']) ?></div><br>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
</div>
