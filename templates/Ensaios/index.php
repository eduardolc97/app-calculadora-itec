<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ensaio[]|\Cake\Collection\CollectionInterface $ensaios
 */
?>
<div class="ensaios index content">
    <?= $this->Html->link(__('New Ensaio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ensaios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ensaios as $ensaio): ?>
                <tr>
                    <td><?= $this->Number->format($ensaio->id) ?></td>
                    <td><?= h($ensaio->created_at) ?></td>
                    <td><?= h($ensaio->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ensaio->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ensaio->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ensaio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ensaio->id)]) ?>
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
