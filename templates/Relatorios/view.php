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
            <?= $this->Html->link(__('Edit Relatorio'), ['action' => 'edit', $relatorio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Relatorio'), ['action' => 'delete', $relatorio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relatorio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Relatorios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Relatorio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="relatorios view content">
            <h3><?= h($relatorio->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($relatorio->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($relatorio->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($relatorio->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($relatorio->updated_at) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observacoes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($relatorio->observacoes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
