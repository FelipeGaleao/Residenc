<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Load[]|\Cake\Collection\CollectionInterface $loads
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Load'), ['action' => 'add']) ?></li>
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
<div class="loads index large-9 medium-8 columns content">
    <h3><?= __('Loads') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('circuit_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('room_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estabilishment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('current') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voltage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active_power') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($loads as $load): ?>
            <tr>
                <td><?= $this->Number->format($load->id) ?></td>
                <td><?= h($load->name) ?></td>
                <td><?= h($load->description) ?></td>
                <td><?= $load->has('circuit') ? $this->Html->link($load->circuit->name, ['controller' => 'Circuits', 'action' => 'view', $load->circuit->id]) : '' ?></td>
                <td><?= $load->has('room') ? $this->Html->link($load->room->name, ['controller' => 'Rooms', 'action' => 'view', $load->room->id]) : '' ?></td>
                <td><?= $load->has('estabilishment') ? $this->Html->link($load->estabilishment->name, ['controller' => 'Estabilishments', 'action' => 'view', $load->estabilishment->id]) : '' ?></td>
                <td><?= $this->Number->format($load->current) ?></td>
                <td><?= $this->Number->format($load->voltage) ?></td>
                <td><?= $this->Number->format($load->active_power) ?></td>
                <td><?= h($load->created) ?></td>
                <td><?= h($load->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $load->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $load->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $load->id], ['confirm' => __('Are you sure you want to delete # {0}?', $load->id)]) ?>
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
