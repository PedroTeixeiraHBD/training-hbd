<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Price $price
 * @var string[]|\Cake\Collection\CollectionInterface $trainings
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acções') ?></h4>
            <?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $price->id],
                ['confirm' => __('Tem a certeza que deseja apagar # {0}?', $price->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Preços'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prices form content">
            <?= $this->Form->create($price) ?>
            <fieldset>
                <legend><?= __('Editar Preço') ?></legend>
                <?php
                    echo $this->Form->control('training_id', ['options' => $trainings]);
                    echo $this->Form->control('Entidade');
                    echo $this->Form->control('Preco');
                    echo $this->Form->control('Data_Validade');
                    echo $this->Form->control('Data_Inicio');
                    echo $this->Form->control('Duracao');
                    echo $this->Form->control('Calendarizacao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submeter')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
