<div class="content">
  <h4>Categories</h4>
  <div class="list-group">
    <?php foreach ($categories as $category): ?>
      <a href="<?= $this->Url->build($category->url); ?>" class="list-group-item">
        <?= $category->name; ?>
        <span class="badge"><?= $category->post_count ?></span>
      </a>
    <?php endforeach; ?>
  </div>

  <h4>Last billets</h4>
  <div class="list-group">
    <?php foreach ($billets as $billet): ?>
      <a href="<?= $this->Url->build($billet->url); ?>" class="list-group-item">
        <?= $billet->title; ?>
      </a>
    <?php endforeach; ?>
  </div>
</div>
