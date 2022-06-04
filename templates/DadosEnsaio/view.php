<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DadosEnsaio $dadosEnsaio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dados Ensaio'), ['action' => 'edit', $dadosEnsaio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dados Ensaio'), ['action' => 'delete', $dadosEnsaio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dadosEnsaio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dados Ensaio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dados Ensaio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dadosEnsaio view content">
            <h3><?= h($dadosEnsaio->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ensaio') ?></th>
                    <td><?= $dadosEnsaio->has('ensaio') ? $this->Html->link($dadosEnsaio->ensaio->id, ['controller' => 'Ensaios', 'action' => 'view', $dadosEnsaio->ensaio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dado') ?></th>
                    <td><?= $dadosEnsaio->has('dado') ? $this->Html->link($dadosEnsaio->dado->id, ['controller' => 'Dados', 'action' => 'view', $dadosEnsaio->dado->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dadosEnsaio->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($dadosEnsaio->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($dadosEnsaio->updated_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
