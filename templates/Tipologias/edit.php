<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipologia $tipologia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipologia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipologia->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tipologias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipologias form content">
            <?= $this->Form->create($tipologia) ?>
            <fieldset>
                <legend><?= __('Edit Tipologia') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
