<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Load $load
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $load->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $load->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Loads'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Circuits'), ['controller' => 'Circuits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Circuit'), ['controller' => 'Circuits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estabilishments'), ['controller' => 'Estabilishments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estabilishment'), ['controller' => 'Estabilishments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipments'), ['controller' => 'Equipments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="loads form large-9 medium-8 columns content">
    <?= $this->Form->create($load) ?>
    <fieldset>
        <legend><?= __('Edit Load') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('circuit_id', ['options' => $circuits, 'empty' => true]);
            echo $this->Form->control('room_id', ['options' => $rooms, 'empty' => true]);
            echo $this->Form->control('estabilishment_id', ['options' => $estabilishments, 'empty' => true]);
            echo $this->Form->control('current');
            echo $this->Form->control('voltage');
            echo $this->Form->control('active_power');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
