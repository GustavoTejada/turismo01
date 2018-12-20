<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Opinion $opinion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Opinion'), ['action' => 'edit', $opinion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opinion'), ['action' => 'delete', $opinion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opinion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Opinions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opinion'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="opinions view large-9 medium-8 columns content">
    <h3><?= h($opinion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($opinion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rating') ?></th>
            <td><?= $this->Number->format($opinion->rating) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transmitter Id') ?></th>
            <td><?= $this->Number->format($opinion->transmitter_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receptor Id') ?></th>
            <td><?= $this->Number->format($opinion->receptor_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($opinion->description)); ?>
    </div>
</div>
