<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dado $dado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dado'), ['action' => 'edit', $dado->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dado'), ['action' => 'delete', $dado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dado->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dados view content">
            <h3><?= h($dado->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($dado->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($dado->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dado->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($dado->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($dado->updated_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Dados Ensaio') ?></h4>
                <?php if (!empty($dado->dados_ensaio)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th><?= __('Ensaio Id') ?></th>
                            <th><?= __('Dado Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($dado->dados_ensaio as $dadosEnsaio) : ?>
                        <tr>
                            <td><?= h($dadosEnsaio->id) ?></td>
                            <td><?= h($dadosEnsaio->created_at) ?></td>
                            <td><?= h($dadosEnsaio->updated_at) ?></td>
                            <td><?= h($dadosEnsaio->ensaio_id) ?></td>
                            <td><?= h($dadosEnsaio->dado_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'DadosEnsaio', 'action' => 'view', $dadosEnsaio->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'DadosEnsaio', 'action' => 'edit', $dadosEnsaio->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'DadosEnsaio', 'action' => 'delete', $dadosEnsaio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dadosEnsaio->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
