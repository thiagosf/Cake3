<div class="actions columns large-2 medium-3">
  <h3><?= __('Actions') ?></h3>
  <ul class="side-nav">
    <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?></li>
  </ul>
</div>
<div class="posts index large-10 medium-9 columns">
  <table cellpadding="0" cellspacing="0">
  <thead>
    <tr>
      <th><?= $this->Paginator->sort('id') ?></th>
      <th><?= $this->Paginator->sort('category_id') ?></th>
      <th><?= $this->Paginator->sort('title') ?></th>
      <th><?= $this->Paginator->sort('slug') ?></th>
      <th><?= $this->Paginator->sort('publish_date') ?></th>
      <th><?= $this->Paginator->sort('created') ?></th>
      <th><?= $this->Paginator->sort('updated') ?></th>
      <th class="actions"><?= __('Actions') ?></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($posts as $post): ?>
    <tr>
      <td><?= $this->Number->format($post->id) ?></td>
      <td><?= h($post->category->name) ?></td>
      <td><?= h($post->title) ?></td>
      <td><?= h($post->slug) ?></td>
      <td><?= h($post->publish_date) ?></td>
      <td><?= h($post->created) ?></td>
      <td><?= h($post->updated) ?></td>
      <td class="actions">
        <?= $this->Html->link(__('View'), ['action' => 'view', $post->id]) ?>
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id]) ?>
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?>
      </td>
    </tr>

  <?php endforeach; ?>
  </tbody>
  </table>
  <div class="paginator">
    <ul class="pagination">
      <?= $this->Paginator->prev('< ' . __('previous')) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
  </div>
</div>
