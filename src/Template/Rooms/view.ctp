<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estabilishments'), ['controller' => 'Estabilishments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estabilishment'), ['controller' => 'Estabilishments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipments'), ['controller' => 'Equipments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Loads'), ['controller' => 'Loads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Load'), ['controller' => 'Loads', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    <h3><?= h($room->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $room->has('user') ? $this->Html->link($room->user->id, ['controller' => 'Users', 'action' => 'view', $room->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estabilishment') ?></th>
            <td><?= $room->has('estabilishment') ? $this->Html->link($room->estabilishment->name, ['controller' => 'Estabilishments', 'action' => 'view', $room->estabilishment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($room->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sensor') ?></th>
            <td><?= $this->Number->format($room->sensor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($room->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($room->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($room->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($room->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Photo') ?></h4>
        <?= $this->Text->autoParagraph(h($room->photo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Power Calculated') ?></h4>
        <?= $this->Text->autoParagraph(h($room->power_calculated)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Equipments') ?></h4>
        <?php if (!empty($room->equipments)): ?>
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
            <?php foreach ($room->equipments as $equipments): ?>
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
    <div class="related">
        <h4><?= __('Related Loads') ?></h4>
        <?php if (!empty($room->loads)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Circuit Id') ?></th>
                <th scope="col"><?= __('Room Id') ?></th>
                <th scope="col"><?= __('Estabilishment Id') ?></th>
                <th scope="col"><?= __('Current') ?></th>
                <th scope="col"><?= __('Voltage') ?></th>
                <th scope="col"><?= __('Active Power') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($room->loads as $loads): ?>
            <tr>
                <td><?= h($loads->id) ?></td>
                <td><?= h($loads->name) ?></td>
                <td><?= h($loads->description) ?></td>
                <td><?= h($loads->circuit_id) ?></td>
                <td><?= h($loads->room_id) ?></td>
                <td><?= h($loads->estabilishment_id) ?></td>
                <td><?= h($loads->current) ?></td>
                <td><?= h($loads->voltage) ?></td>
                <td><?= h($loads->active_power) ?></td>
                <td><?= h($loads->created) ?></td>
                <td><?= h($loads->modified) ?></td>
                <td><?= h($loads->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Loads', 'action' => 'view', $loads->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Loads', 'action' => 'edit', $loads->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Loads', 'action' => 'delete', $loads->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loads->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
