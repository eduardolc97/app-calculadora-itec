<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ensaio $ensaio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ensaio'), ['action' => 'edit', $ensaio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ensaio'), ['action' => 'delete', $ensaio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ensaio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ensaios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ensaio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ensaios view content">
            <h3><?= h($ensaio->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ensaio->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($ensaio->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($ensaio->updated_at) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observacoes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ensaio->observacoes)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Dados Ensaio') ?></h4>
                <?php if (!empty($ensaio->dados_ensaio)) : ?>
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
                        <?php foreach ($ensaio->dados_ensaio as $dadosEnsaio) : ?>
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
