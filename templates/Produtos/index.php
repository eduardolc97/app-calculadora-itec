<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto[]|\Cake\Collection\CollectionInterface $produtos
 */
?>
<div class="produtos index content">
    <?= $this->Html->link(__('New Produto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Produtos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cliente_id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th><?= $this->Paginator->sort('tipologia_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= $this->Number->format($produto->id) ?></td>
                    <td><?= $produto->has('cliente') ? $this->Html->link($produto->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $produto->cliente->id]) : '' ?></td>
                    <td><?= h($produto->nome) ?></td>
                    <td><?= h($produto->created_at) ?></td>
                    <td><?= h($produto->updated_at) ?></td>
                    <td><?= $produto->has('tipologia') ? $this->Html->link($produto->tipologia->id, ['controller' => 'Tipologias', 'action' => 'view', $produto->tipologia->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $produto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
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
