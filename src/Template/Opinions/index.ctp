<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Opinion[]|\Cake\Collection\CollectionInterface $opinions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Opinion'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opinions index large-9 medium-8 columns content">
    <h3><?= __('Opinions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rating') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transmitter_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receptor_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($opinions as $opinion): ?>
            <tr>
                <td><?= $this->Number->format($opinion->id) ?></td>
                <td><?= $this->Number->format($opinion->rating) ?></td>
                <td><?= $this->Number->format($opinion->transmitter_id) ?></td>
                <td><?= $this->Number->format($opinion->receptor_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $opinion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $opinion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $opinion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opinion->id)]) ?>
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
