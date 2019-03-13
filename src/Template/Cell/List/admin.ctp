<div class="content">
  <h4>10 Last Users</h4>
  <div class="list-group">
    <?php foreach ($users as $user): ?>
      <a href="<?= $this->Url->build(['controller' => 'admin\Users', 'action' => 'view', $user->id]); ?>" class="list-group-item">
        <?= $user->username; ?>
        <span class="badge"><?= $user->post_count; ?></span>
      </a>
    <?php endforeach; ?>
  </div>

  <h4>10 Last Billets</h4>
  <div class="list-group">
    <?php foreach ($billets as $billet): ?>
      <a href="<?= $this->Url->build(['controller' => 'admin\Billets', 'action' => 'view', $billet->id]); ?>" class="list-group-item">
        <?= $billet->title; ?>
      </a>
    <?php endforeach; ?>
  </div>
</div>
