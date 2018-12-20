<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lender[]|\Cake\Collection\CollectionInterface $lenders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lender'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lenders index large-9 medium-8 columns content">
    <h3><?= __('Lenders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('open_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('close_time') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lenders as $lender): ?>
            <tr>
                <td><?= $this->Number->format($lender->id) ?></td>
                <td><?= h($lender->name) ?></td>
                <td><?= h($lender->address) ?></td>
                <td><?= h($lender->city) ?></td>
                <td><?= h($lender->country) ?></td>
                <td><?= h($lender->phone) ?></td>
                <td><?= h($lender->open_time) ?></td>
                <td><?= h($lender->close_time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lender->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lender->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lender->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lender->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
