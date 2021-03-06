<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Billets'), ['controller' => 'Billets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billet'), ['controller' => 'Billets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($category->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($category->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Count') ?></th>
            <td><?= $this->Number->format($category->post_count) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Billets') ?></h4>
        <?php if (!empty($category->billets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Tags') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->billets as $billets): ?>
            <tr>
                <td><?= h($billets->id) ?></td>
                <td><?= h($billets->category_id) ?></td>
                <td><?= h($billets->created) ?></td>
                <td><?= h($billets->modified) ?></td>
                <td><?= h($billets->title) ?></td>
                <td><?= h($billets->content) ?></td>
                <td><?= h($billets->tags) ?></td>
                <td><?= h($billets->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Billets', 'action' => 'view', $billets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Billets', 'action' => 'edit', $billets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Billets', 'action' => 'delete', $billets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
