<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lender $lender
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lender->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lender->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lenders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lenders form large-9 medium-8 columns content">
    <?= $this->Form->create($lender) ?>
    <fieldset>
        <legend><?= __('Edit Lender') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('address');
            echo $this->Form->control('city');
            echo $this->Form->control('country');
            echo $this->Form->control('phone');
            echo $this->Form->control('open_time');
            echo $this->Form->control('close_time');
            echo $this->Form->control('rules');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
