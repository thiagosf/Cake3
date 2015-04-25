<div class="actions columns large-2 medium-3">
  <h3><?= __('Actions') ?></h3>
  <ul class="side-nav">
    <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
  </ul>
</div>
<div class="categories form large-10 medium-9 columns">
  <?= $this->Form->create($category); ?>
  <fieldset>
    <legend><?= __('Add Category') ?></legend>
    <?php
      echo $this->Form->input('name');
    ?>
  </fieldset>
  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>
