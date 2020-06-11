<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Load $load
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Load'), ['action' => 'edit', $load->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Load'), ['action' => 'delete', $load->id], ['confirm' => __('Are you sure you want to delete # {0}?', $load->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Loads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Load'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Circuits'), ['controller' => 'Circuits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Circuit'), ['controller' => 'Circuits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estabilishments'), ['controller' => 'Estabilishments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estabilishment'), ['controller' => 'Estabilishments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipments'), ['controller' => 'Equipments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="loads view large-9 medium-8 columns content">
    <h3><?= h($load->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($load->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($load->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Circuit') ?></th>
            <td><?= $load->has('circuit') ? $this->Html->link($load->circuit->name, ['controller' => 'Circuits', 'action' => 'view', $load->circuit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Room') ?></th>
            <td><?= $load->has('room') ? $this->Html->link($load->room->name, ['controller' => 'Rooms', 'action' => 'view', $load->room->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estabilishment') ?></th>
            <td><?= $load->has('estabilishment') ? $this->Html->link($load->estabilishment->name, ['controller' => 'Estabilishments', 'action' => 'view', $load->estabilishment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($load->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Current') ?></th>
            <td><?= $this->Number->format($load->current) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voltage') ?></th>
            <td><?= $this->Number->format($load->voltage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active Power') ?></th>
            <td><?= $this->Number->format($load->active_power) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($load->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($load->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($load->status)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Equipments') ?></h4>
        <?php if (!empty($load->equipments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number Serie') ?></th>
                <th scope="col"><?= __('Voltage') ?></th>
                <th scope="col"><?= __('Average Current') ?></th>
                <th scope="col"><?= __('Active Power') ?></th>
                <th scope="col"><?= __('Load Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Room Id') ?></th>
                <th scope="col"><?= __('Estabilishment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($load->equipments as $equipments): ?>
            <tr>
                <td><?= h($equipments->id) ?></td>
                <td><?= h($equipments->number_serie) ?></td>
                <td><?= h($equipments->voltage) ?></td>
                <td><?= h($equipments->average_current) ?></td>
                <td><?= h($equipments->active_power) ?></td>
                <td><?= h($equipments->load_id) ?></td>
                <td><?= h($equipments->created) ?></td>
                <td><?= h($equipments->modified) ?></td>
                <td><?= h($equipments->room_id) ?></td>
                <td><?= h($equipments->estabilishment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Equipments', 'action' => 'view', $equipments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Equipments', 'action' => 'edit', $equipments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Equipments', 'action' => 'delete', $equipments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
