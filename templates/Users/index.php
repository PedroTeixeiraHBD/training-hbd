<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('Novo utilizador'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Utilizadores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Nome') ?></th>
                    <th><?= $this->Paginator->sort('Cargo') ?></th>
                    <th><?= $this->Paginator->sort('Empresa') ?></th>
                    <th><?= $this->Paginator->sort('Departamento') ?></th>
                    <th class="actions"><?= __('Acções') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->Nome) ?></td>
                    <td><?= h($user->Cargo) ?></td>
                    <td><?= h($user->Empresa) ?></td>
                    <td><?= h($user->Departamento) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $user->id], ['confirm' => __('Tem a certeza que deseja apagar # {0}?', $user->id)]) ?>
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
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registo(s) de {{count}} total')) ?></p>
    </div>
</div>
