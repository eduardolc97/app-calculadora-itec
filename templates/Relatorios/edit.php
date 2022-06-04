<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relatorio $relatorio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $relatorio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $relatorio->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Relatorios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="relatorios form content">
            <?= $this->Form->create($relatorio) ?>
            <fieldset>
                <legend><?= __('Edit Relatorio') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('observacoes');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
