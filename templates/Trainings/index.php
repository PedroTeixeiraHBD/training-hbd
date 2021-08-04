<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Training[]|\Cake\Collection\CollectionInterface $trainings
 */
?>
<div class="trainings index content">
    <?= $this->Html->link(__('Novo registo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Formações') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Nome') ?></th>
                    <th><?= $this->Paginator->sort('Area') ?></th>
                    <th class="actions"><?= __('Acções') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trainings as $training): ?>
                <tr>
                    <td><?= $this->Number->format($training->id) ?></td>
                    <td><?= h($training->Nome) ?></td>
                    <td><?= h($training->Area) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $training->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $training->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $training->id], ['confirm' => __('Tem a certeza que quer apagar # {0}?', $training->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próxima') . ' >') ?>
            <?= $this->Paginator->last(__('última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registo(s) de {{count}} total')) ?></p>
    </div>
</div>
