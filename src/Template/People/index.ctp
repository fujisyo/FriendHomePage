<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Person[]|\Cake\Collection\CollectionInterface $people
  */
?>
<h1>サンプル</h1>
<?php foreach ($data as $obj): ?>
    <pre><?php print_r($obj->toArray()) ?></pre>
<?php endforeach; ?>