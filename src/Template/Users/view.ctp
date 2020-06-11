<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Circuits'), ['controller' => 'Circuits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Circuit'), ['controller' => 'Circuits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estabilishments'), ['controller' => 'Estabilishments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estabilishment'), ['controller' => 'Estabilishments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type User') ?></th>
            <td><?= $this->Number->format($user->type_user) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Firstname') ?></h4>
        <?= $this->Text->autoParagraph(h($user->firstname)); ?>
    </div>
    <div class="row">
        <h4><?= __('Lastname') ?></h4>
        <?= $this->Text->autoParagraph(h($user->lastname)); ?>
    </div>
    <div class="row">
        <h4><?= __('Cpf') ?></h4>
        <?= $this->Text->autoParagraph(h($user->cpf)); ?>
    </div>
    <div class="row">
        <h4><?= __('Email') ?></h4>
        <?= $this->Text->autoParagraph(h($user->email)); ?>
    </div>
    <div class="row">
        <h4><?= __('Password') ?></h4>
        <?= $this->Text->autoParagraph(h($user->password)); ?>
    </div>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($user->address)); ?>
    </div>
    <div class="row">
        <h4><?= __('City') ?></h4>
        <?= $this->Text->autoParagraph(h($user->city)); ?>
    </div>
    <div class="row">
        <h4><?= __('Uf') ?></h4>
        <?= $this->Text->autoParagraph(h($user->uf)); ?>
    </div>
    <div class="row">
        <h4><?= __('Photo') ?></h4>
        <?= $this->Text->autoParagraph(h($user->photo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Circuits') ?></h4>
        <?php if (!empty($user->circuits)): ?>
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
            <?php foreach ($user->circuits as $circuits): ?>
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
        <h4><?= __('Related Estabilishments') ?></h4>
        <?php if (!empty($user->estabilishments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Voltage Customer') ?></th>
                <th scope="col"><?= __('Aggroupment Customer') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Photos') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->estabilishments as $estabilishments): ?>
            <tr>
                <td><?= h($estabilishments->id) ?></td>
                <td><?= h($estabilishments->name) ?></td>
                <td><?= h($estabilishments->description) ?></td>
                <td><?= h($estabilishments->address) ?></td>
                <td><?= h($estabilishments->voltage_customer) ?></td>
                <td><?= h($estabilishments->aggroupment_customer) ?></td>
                <td><?= h($estabilishments->created) ?></td>
                <td><?= h($estabilishments->modified) ?></td>
                <td><?= h($estabilishments->status) ?></td>
                <td><?= h($estabilishments->photos) ?></td>
                <td><?= h($estabilishments->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Estabilishments', 'action' => 'view', $estabilishments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Estabilishments', 'action' => 'edit', $estabilishments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Estabilishments', 'action' => 'delete', $estabilishments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabilishments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Rooms') ?></h4>
        <?php if (!empty($user->rooms)): ?>
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
            <?php foreach ($user->rooms as $rooms): ?>
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
