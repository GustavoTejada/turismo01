<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Opinion $opinion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $opinion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $opinion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Opinions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="opinions form large-9 medium-8 columns content">
    <?= $this->Form->create($opinion) ?>
    <fieldset>
        <legend><?= __('Edit Opinion') ?></legend>
        <?php
            echo $this->Form->control('rating');
            echo $this->Form->control('description');
            echo $this->Form->control('transmitter_id');
            echo $this->Form->control('receptor_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
