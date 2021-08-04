<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Price $price
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Editar Preço'), ['action' => 'edit', $price->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Apagar Preço'), ['action' => 'delete', $price->id], ['confirm' => __('Tem a certeza que deseja apagar # {0}?', $price->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Preços'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Preço'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prices view content">
            <h3><?= h($price->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Training') ?></th>
                    <td><?= $price->has('training') ? $this->Html->link($price->training->id, ['controller' => 'Trainings', 'action' => 'view', $price->training->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Entidade') ?></th>
                    <td><?= h($price->Entidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duracao') ?></th>
                    <td><?= h($price->Duracao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calendarizacao') ?></th>
                    <td><?= h($price->Calendarizacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($price->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preco') ?></th>
                    <td><?= $this->Number->format($price->Preco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Validade') ?></th>
                    <td><?= h($price->Data_Validade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Inicio') ?></th>
                    <td><?= h($price->Data_Inicio) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Utilizadores e formações relacionados') ?></h4>
                <?php if (!empty($price->training_users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Price Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Data Inscricao') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($price->training_users as $trainingUsers) : ?>
                        <tr>
                            <td><?= h($trainingUsers->price_id) ?></td>
                            <td><?= h($trainingUsers->user_id) ?></td>
                            <td><?= h($trainingUsers->Data_Inscricao) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['controller' => 'TrainingUsers', 'action' => 'view', $trainingUsers->]) ?>
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
