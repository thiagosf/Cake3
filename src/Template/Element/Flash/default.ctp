<?php
$class = 'alert-box';
if (!empty($params['class'])) {
  $class .= ' ' . $params['class'];
}
?>
<div class="<?= h($class) ?>"><?= h($message) ?></div>
