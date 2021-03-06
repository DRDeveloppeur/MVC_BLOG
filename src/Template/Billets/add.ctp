<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Billet $billet
 */
?>
<div class="billets form large-9 medium-8 columns content">
    <?= $this->Form->create($billet) ?>
    <fieldset>
        <legend><?= __('Add Billet') ?></legend>
        <?php
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('title');
            echo $this->Form->control('content');
            echo $this->Form->control('tags');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
