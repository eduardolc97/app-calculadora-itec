<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipologia[]|\Cake\Collection\CollectionInterface $tipologias
 */
?>
<div class="tipologias index content">
    <?= $this->Html->link(__('New Tipologia'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipologias') ?></h3>
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
                <?php foreach ($tipologias as $tipologia): ?>
                <tr>
                    <td><?= $this->Number->format($tipologia->id) ?></td>
                    <td><?= h($tipologia->nome) ?></td>
                    <td><?= h($tipologia->created_at) ?></td>
                    <td><?= h($tipologia->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipologia->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipologia->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipologia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipologia->id)]) ?>
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
