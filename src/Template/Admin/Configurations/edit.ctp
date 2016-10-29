<?php $this->assign('title', 'Edit Config'); ?>


<?= $this->Form->create($configuration) ?>
<?= h($configuration->path) ?>
<?= $this->Form->input('path', ['type' => 'hidden']) ?>   
<?= $this->Form->input('value', ['label' => false]) ?>            
<?= $this->Form->button(__('Save'), ['class' => 'btn-primary']); ?>
<?= $this->Form->end(); ?>
