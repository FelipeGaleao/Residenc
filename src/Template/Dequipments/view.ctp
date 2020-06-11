<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dequipment $dequipment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dequipment'), ['action' => 'edit', $dequipment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dequipment'), ['action' => 'delete', $dequipment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dequipment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dequipments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dequipment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dequipments view large-9 medium-8 columns content">
    <h3><?= h($dequipment->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dequipment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Power Consumption') ?></th>
            <td><?= $this->Number->format($dequipment->power_consumption) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($dequipment->name)); ?>
    </div>
</div>
