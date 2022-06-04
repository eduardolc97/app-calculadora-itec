<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dado[]|\Cake\Collection\CollectionInterface $dados
 */
?>
<div class="dados index content">
    <?= $this->Html->link(__('New Dado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Dados') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $dado): ?>
                <tr>
                    <td><?= $this->Number->format($dado->id) ?></td>
                    <td><?= h($dado->tipo) ?></td>
                    <td><?= h($dado->nome) ?></td>
                    <td><?= h($dado->created_at) ?></td>
                    <td><?= h($dado->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dado->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dado->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dado->id)]) ?>
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
