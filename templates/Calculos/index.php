<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calculo[]|\Cake\Collection\CollectionInterface $calculos
 */
?>
<div class="calculos index content">
    <?= $this->Html->link(__('New Calculo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Calculos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('enunciado') ?></th>
                    <th><?= $this->Paginator->sort('unidade') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($calculos as $calculo): ?>
                <tr>
                    <td><?= $this->Number->format($calculo->id) ?></td>
                    <td><?= h($calculo->enunciado) ?></td>
                    <td><?= h($calculo->unidade) ?></td>
                    <td><?= h($calculo->created_at) ?></td>
                    <td><?= h($calculo->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $calculo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $calculo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $calculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calculo->id)]) ?>
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
