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
            <?= $this->Html->link(__('Listar Formações'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainings form content">
            <?= $this->Form->create($training) ?>
            <fieldset>
                <legend><?= __('Adicionar Formação') ?></legend>
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
