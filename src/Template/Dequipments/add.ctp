<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dequipment $dequipment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dequipments'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dequipments form large-9 medium-8 columns content">
    <?= $this->Form->create($dequipment) ?>
    <fieldset>
        <legend><?= __('Add Dequipment') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('power_consumption');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
