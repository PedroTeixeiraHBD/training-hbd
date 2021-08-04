<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Training $training
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acções') ?></h4>
            <?= $this->Html->link(__('Editar formação'), ['action' => 'edit', $training->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Apagar Formação'), ['action' => 'delete', $training->id], ['confirm' => __('Tem a certeza que deseja apagar # {0}?', $training->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Formações'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nova Formação'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainings view content">
            <h3><?= h($training->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($training->Nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Area') ?></th>
                    <td><?= h($training->Area) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($training->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Preços Relacionados') ?></h4>
                <?php if (!empty($training->prices)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Training Id') ?></th>
                            <th><?= __('Entidade') ?></th>
                            <th><?= __('Preco') ?></th>
                            <th><?= __('Data Validade') ?></th>
                            <th><?= __('Data Inicio') ?></th>
                            <th><?= __('Duracao') ?></th>
                            <th><?= __('Calendarizacao') ?></th>
                            <th class="actions"><?= __('Acções') ?></th>
                        </tr>
                        <?php foreach ($training->prices as $prices) : ?>
                        <tr>
                            <td><?= h($prices->id) ?></td>
                            <td><?= h($prices->training_id) ?></td>
                            <td><?= h($prices->Entidade) ?></td>
                            <td><?= h($prices->Preco) ?></td>
                            <td><?= h($prices->Data_Validade) ?></td>
                            <td><?= h($prices->Data_Inicio) ?></td>
                            <td><?= h($prices->Duracao) ?></td>
                            <td><?= h($prices->Calendarizacao) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['controller' => 'Prices', 'action' => 'view', $prices->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Prices', 'action' => 'edit', $prices->id]) ?>
                                <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Prices', 'action' => 'delete', $prices->id], ['confirm' => __('Tem a certeza que deseja apagar # {0}?', $prices->id)]) ?>
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
