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
            <?= $this->Html->link(__('Edit Calculo'), ['action' => 'edit', $calculo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Calculo'), ['action' => 'delete', $calculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calculo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Calculos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Calculo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="calculos view content">
            <h3><?= h($calculo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Enunciado') ?></th>
                    <td><?= h($calculo->enunciado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unidade') ?></th>
                    <td><?= h($calculo->unidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($calculo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($calculo->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($calculo->updated_at) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Nome') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($calculo->nome)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Observacoes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($calculo->observacoes)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Referencias') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($calculo->referencias)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Formula') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($calculo->formula)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
