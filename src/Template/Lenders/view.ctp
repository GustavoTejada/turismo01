<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lender $lender
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lender'), ['action' => 'edit', $lender->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lender'), ['action' => 'delete', $lender->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lender->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lenders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lender'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lenders view large-9 medium-8 columns content">
    <h3><?= h($lender->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($lender->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($lender->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($lender->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($lender->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($lender->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lender->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Open Time') ?></th>
            <td><?= h($lender->open_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Close Time') ?></th>
            <td><?= h($lender->close_time) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Rules') ?></h4>
        <?= $this->Text->autoParagraph(h($lender->rules)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($lender->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Reservations') ?></h4>
        <?php if (!empty($lender->reservations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Agreed Time') ?></th>
                <th scope="col"><?= __('Number People') ?></th>
                <th scope="col"><?= __('Payment Info') ?></th>
                <th scope="col"><?= __('Lender Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lender->reservations as $reservations): ?>
            <tr>
                <td><?= h($reservations->id) ?></td>
                <td><?= h($reservations->created) ?></td>
                <td><?= h($reservations->agreed_time) ?></td>
                <td><?= h($reservations->number_people) ?></td>
                <td><?= h($reservations->payment_info) ?></td>
                <td><?= h($reservations->lender_id) ?></td>
                <td><?= h($reservations->client_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservations', 'action' => 'delete', $reservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
