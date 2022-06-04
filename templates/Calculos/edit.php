<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calculo $calculo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $calculo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $calculo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Calculos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="calculos form content">
            <?= $this->Form->create($calculo) ?>
            <fieldset>
                <legend><?= __('Edit Calculo') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('observacoes');
                    echo $this->Form->control('referencias');
                    echo $this->Form->control('formula');
                    echo $this->Form->control('enunciado');
                    echo $this->Form->control('unidade');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
