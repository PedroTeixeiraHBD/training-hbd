<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acções') ?></h4>
            <?= $this->Html->link(__('Editar Utilizador'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Apagar Utilizador'), ['action' => 'delete', $user->id], ['confirm' => __('Tem a certeza que deseja apagar # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Utilizadores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Utilizador'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($user->Nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cargo') ?></th>
                    <td><?= h($user->Cargo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Empresa') ?></th>
                    <td><?= h($user->Empresa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Departamento') ?></th>
                    <td><?= h($user->Departamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Utilizadores e formações relacionados') ?></h4>
                <?php if (!empty($user->training_users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Price Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Data Inscricao') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->training_users as $trainingUsers) : ?>
                        <tr>
                            <td><?= h($trainingUsers->price_id) ?></td>
                            <td><?= h($trainingUsers->user_id) ?></td>
                            <td><?= h($trainingUsers->Data_Inscricao) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Editar'), ['controller' => 'TrainingUsers', 'action' => 'edit', $trainingUsers->]) ?>
                                <?= $this->Form->postLink(__('Apagar'), ['controller' => 'TrainingUsers', 'action' => 'delete', $trainingUsers->], ['confirm' => __('Tem a certeza que deseja apagar # {0}?', $trainingUsers->)]) ?>
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
