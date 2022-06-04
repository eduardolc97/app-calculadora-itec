<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DadosEnsaio $dadosEnsaio
 * @var string[]|\Cake\Collection\CollectionInterface $ensaios
 * @var string[]|\Cake\Collection\CollectionInterface $dados
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dadosEnsaio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dadosEnsaio->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Dados Ensaio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dadosEnsaio form content">
            <?= $this->Form->create($dadosEnsaio) ?>
            <fieldset>
                <legend><?= __('Edit Dados Ensaio') ?></legend>
                <?php
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                    echo $this->Form->control('ensaio_id', ['options' => $ensaios, 'empty' => true]);
                    echo $this->Form->control('dado_id', ['options' => $dados, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
