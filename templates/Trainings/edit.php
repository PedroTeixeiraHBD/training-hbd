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
            <?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $training->id],
                ['confirm' => __('Tem a certeza que deseja apagar # {0}?', $training->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Formações'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainings form content">
            <?= $this->Form->create($training) ?>
            <fieldset>
                <legend><?= __('Editar Formação') ?></legend>
                <?php
                    echo $this->Form->control('Nome');
                    echo $this->Form->control('Area');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submeter')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
