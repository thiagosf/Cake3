<div class="actions columns large-2 medium-3">
  <h3><?= __('Actions') ?></h3>
  <ul class="side-nav">
    <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
  </ul>
</div>
<div class="posts view large-10 medium-9 columns">
  <h2><?= h($post->title) ?></h2>
  <p><?= __("Published on `{0}` with a slug `{1}`", [$post->publish_date, $post->slug]) ?></p>
  <div class="row">
    <div class="large-5 columns strings">
      <h6 class="subheader"><?= __('Title') ?></h6>
      <p><?= h($post->title) ?></p>
      <h6 class="subheader"><?= __('Slug') ?></h6>
      <p><?= h($post->slug) ?></p>
    </div>
    <div class="large-2 columns numbers end">
      <h6 class="subheader"><?= __('Id') ?></h6>
      <p><?= $this->Number->format($post->id) ?></p>
      <h6 class="subheader"><?= __('Category') ?></h6>
      <p><?= $post->category->name ?></p>
    </div>
    <div class="large-2 columns dates end">
      <h6 class="subheader"><?= __('Publish Date') ?></h6>
      <p><?= h($post->publish_date) ?></p>
      <h6 class="subheader"><?= __('Created') ?></h6>
      <p><?= h($post->created) ?></p>
      <h6 class="subheader"><?= __('Updated') ?></h6>
      <p><?= h($post->updated) ?></p>
    </div>
  </div>
  <div class="row texts">
    <div class="columns large-9">
      <h6 class="subheader"><?= __('Body') ?></h6>
      <?= $this->Text->autoParagraph(h($post->body)); ?>

    </div>
  </div>
</div>
