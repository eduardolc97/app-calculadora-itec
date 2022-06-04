<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DadosEnsaio[]|\Cake\Collection\CollectionInterface $dadosEnsaio
 */
?>
<div class="dadosEnsaio index content">
    <?= $this->Html->link(__('New Dados Ensaio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Dados Ensaio') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th><?= $this->Paginator->sort('ensaio_id') ?></th>
                    <th><?= $this->Paginator->sort('dado_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dadosEnsaio as $dadosEnsaio): ?>
                <tr>
                    <td><?= $this->Number->format($dadosEnsaio->id) ?></td>
                    <td><?= h($dadosEnsaio->created_at) ?></td>
                    <td><?= h($dadosEnsaio->updated_at) ?></td>
                    <td><?= $dadosEnsaio->has('ensaio') ? $this->Html->link($dadosEnsaio->ensaio->id, ['controller' => 'Ensaios', 'action' => 'view', $dadosEnsaio->ensaio->id]) : '' ?></td>
                    <td><?= $dadosEnsaio->has('dado') ? $this->Html->link($dadosEnsaio->dado->id, ['controller' => 'Dados', 'action' => 'view', $dadosEnsaio->dado->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dadosEnsaio->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dadosEnsaio->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dadosEnsaio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dadosEnsaio->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
