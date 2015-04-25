<div class="actions columns large-2 medium-3">
  <h3><?= __('Actions') ?></h3>
  <ul class="side-nav">
    <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
  </ul>
</div>
<div class="contacts form large-10 medium-9 columns">
  <?= $this->Form->create($contact); ?>
  <fieldset>
    <legend><?= __('Add Contact') ?></legend>
    <?php
      echo $this->Form->input('name');
      echo $this->Form->input('email');
      echo $this->Form->input('message');
    ?>
  </fieldset>
  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>
