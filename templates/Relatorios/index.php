<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relatorio[]|\Cake\Collection\CollectionInterface $relatorios
 */
?>
<div class="relatorios index content">
    <?= $this->Html->link(__('New Relatorio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Relatorios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($relatorios as $relatorio): ?>
                <tr>
                    <td><?= $this->Number->format($relatorio->id) ?></td>
                    <td><?= h($relatorio->nome) ?></td>
                    <td><?= h($relatorio->created_at) ?></td>
                    <td><?= h($relatorio->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $relatorio->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $relatorio->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $relatorio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relatorio->id)]) ?>
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
