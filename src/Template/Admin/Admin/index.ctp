<div class="content">
  <div class="row">
    <h1>Welcome Mr. <?= $_SESSION['Auth']['User']['username']; ?></h1>
    <hr>
    <?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?>
    <?= $this->cell('List::admin'); ?>
  </div>
</div>
