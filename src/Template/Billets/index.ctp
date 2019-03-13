<div class="row">
  <div class="billets form large-9 medium-8 columns content">
    <fieldset>
      <h1><legend><?= __('Blog') ?></legend></h1>
      <?= $this->Html->link(__('Create a Post'), ['action' => 'add']) ?>
      <?php foreach ($billets as $billet): ?>
        <article>
          <h2><?= $this->Html->link($billet->title, $billet->url) ?></h2>
          <p>
            <small>
              Category : <?= $this->Html->link($billet->category->title, $billet->category->url) ?><br>
              By : <?= $this->Html->link($billet->user->name, $billet->user->url) ?><br>
              <?php if ($_SESSION['Auth']['User']['id'] === $billet->user->id): ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billet->id]) ?>
              <?php endif; ?>
            </small>
          </p>
          <p><?= $billet->content ?></p>
        </article>
        <hr>
      <?php endforeach; ?>
      <ul class="pagination">
          <?= $this->Paginator->first('<< ' . __('first')) ?>
          <?= $this->Paginator->prev('< ' . __('previous')) ?>
          <?= $this->Paginator->numbers() ?>
          <?= $this->Paginator->next(__('next') . ' >') ?>
          <?= $this->Paginator->last(__('last') . ' >>') ?>
      </ul>
    </fieldset>
  </div>
  <div class="right">
    <?= $this->cell('List::display'); ?>
  </div>
</div>

<!-- ------------------------------------------------------ -->

<!-- <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Billet[]|\Cake\Collection\CollectionInterface $billets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Billet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="billets index large-9 medium-8 columns content">
    <h3><?= __('Billets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tags') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($billets as $billet): ?>
            <tr>
                <td><?= $this->Number->format($billet->id) ?></td>
                <td><?= $billet->has('category') ? $this->Html->link($billet->category->name, ['controller' => 'Categories', 'action' => 'view', $billet->category->id]) : '' ?></td>
                <td><?= h($billet->created) ?></td>
                <td><?= h($billet->modified) ?></td>
                <td><?= h($billet->title) ?></td>
                <td><?= h($billet->tags) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $billet->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billet->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $billet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billet->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div> -->
