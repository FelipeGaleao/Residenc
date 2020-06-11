<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estabilishment $estabilishment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estabilishment'), ['action' => 'edit', $estabilishment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estabilishment'), ['action' => 'delete', $estabilishment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabilishment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estabilishments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estabilishment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Circuits'), ['controller' => 'Circuits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Circuit'), ['controller' => 'Circuits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipments'), ['controller' => 'Equipments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Loads'), ['controller' => 'Loads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Load'), ['controller' => 'Loads', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estabilishments view large-9 medium-8 columns content">
    <h3><?= h($estabilishment->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $estabilishment->has('user') ? $this->Html->link($estabilishment->user->id, ['controller' => 'Users', 'action' => 'view', $estabilishment->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estabilishment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($estabilishment->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($estabilishment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($estabilishment->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($estabilishment->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($estabilishment->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($estabilishment->address)); ?>
    </div>
    <div class="row">
        <h4><?= __('Voltage Customer') ?></h4>
        <?= $this->Text->autoParagraph(h($estabilishment->voltage_customer)); ?>
    </div>
    <div class="row">
        <h4><?= __('Aggroupment Customer') ?></h4>
        <?= $this->Text->autoParagraph(h($estabilishment->aggroupment_customer)); ?>
    </div>
    <div class="row">
        <h4><?= __('Photos') ?></h4>
        <?= $this->Text->autoParagraph(h($estabilishment->photos)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Circuits') ?></h4>
        <?php if (!empty($estabilishment->circuits)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Ambient Description') ?></th>
                <th scope="col"><?= __('Load Type') ?></th>
                <th scope="col"><?= __('Active Power') ?></th>
                <th scope="col"><?= __('Voltage') ?></th>
                <th scope="col"><?= __('Nominal Current') ?></th>
                <th scope="col"><?= __('Cable') ?></th>
                <th scope="col"><?= __('Circuit Breaker') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Phase Board') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Estabilishment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estabilishment->circuits as $circuits): ?>
            <tr>
                <td><?= h($circuits->id) ?></td>
                <td><?= h($circuits->name) ?></td>
                <td><?= h($circuits->description) ?></td>
                <td><?= h($circuits->ambient_description) ?></td>
                <td><?= h($circuits->load_type) ?></td>
                <td><?= h($circuits->active_power) ?></td>
                <td><?= h($circuits->voltage) ?></td>
                <td><?= h($circuits->nominal_current) ?></td>
                <td><?= h($circuits->cable) ?></td>
                <td><?= h($circuits->circuit_breaker) ?></td>
                <td><?= h($circuits->created) ?></td>
                <td><?= h($circuits->modified) ?></td>
                <td><?= h($circuits->phase_board) ?></td>
                <td><?= h($circuits->user_id) ?></td>
                <td><?= h($circuits->estabilishment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Circuits', 'action' => 'view', $circuits->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Circuits', 'action' => 'edit', $circuits->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Circuits', 'action' => 'delete', $circuits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $circuits->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Equipments') ?></h4>
        <?php if (!empty($estabilishment->equipments)): ?>
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
            <?php foreach ($estabilishment->equipments as $equipments): ?>
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
        <?php if (!empty($estabilishment->loads)): ?>
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
            <?php foreach ($estabilishment->loads as $loads): ?>
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
    <div class="related">
        <h4><?= __('Related Rooms') ?></h4>
        <?php if (!empty($estabilishment->rooms)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Power Calculated') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Sensor') ?></th>
                <th scope="col"><?= __('Estabilishment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estabilishment->rooms as $rooms): ?>
            <tr>
                <td><?= h($rooms->id) ?></td>
                <td><?= h($rooms->name) ?></td>
                <td><?= h($rooms->description) ?></td>
                <td><?= h($rooms->photo) ?></td>
                <td><?= h($rooms->power_calculated) ?></td>
                <td><?= h($rooms->user_id) ?></td>
                <td><?= h($rooms->created) ?></td>
                <td><?= h($rooms->modified) ?></td>
                <td><?= h($rooms->sensor) ?></td>
                <td><?= h($rooms->estabilishment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Rooms', 'action' => 'view', $rooms->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Rooms', 'action' => 'edit', $rooms->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rooms', 'action' => 'delete', $rooms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rooms->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
