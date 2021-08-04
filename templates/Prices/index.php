<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Price[]|\Cake\Collection\CollectionInterface $prices
 */
?>
<div class="prices index content">
    <?= $this->Html->link(__('Novo Preço'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Preços') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('training_id') ?></th>
                    <th><?= $this->Paginator->sort('Entidade') ?></th>
                    <th><?= $this->Paginator->sort('Preco') ?></th>
                    <th><?= $this->Paginator->sort('Data_Validade') ?></th>
                    <th><?= $this->Paginator->sort('Data_Inicio') ?></th>
                    <th><?= $this->Paginator->sort('Duracao') ?></th>
                    <th><?= $this->Paginator->sort('Calendarizacao') ?></th>
                    <th class="actions"><?= __('Acções') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prices as $price): ?>
                <tr>
                    <td><?= $this->Number->format($price->id) ?></td>
                    <td><?= $price->has('training') ? $this->Html->link($price->training->id, ['controller' => 'Trainings', 'action' => 'view', $price->training->id]) : '' ?></td>
                    <td><?= h($price->Entidade) ?></td>
                    <td><?= $this->Number->format($price->Preco) ?></td>
                    <td><?= h($price->Data_Validade) ?></td>
                    <td><?= h($price->Data_Inicio) ?></td>
                    <td><?= h($price->Duracao) ?></td>
                    <td><?= h($price->Calendarizacao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $price->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $price->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $price->id], ['confirm' => __('Tem a certeza que deseja apagar # {0}?', $price->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('seguinte') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registo(s) de {{count}} total')) ?></p>
    </div>
</div>
