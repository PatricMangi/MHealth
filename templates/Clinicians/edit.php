<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clinician $clinician
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clinician->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clinician->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Clinicians'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clinicians form content">
            <?= $this->Form->create($clinician) ?>
            <fieldset>
                <legend><?= __('Edit Clinician') ?></legend>
                <?php
                    echo $this->Form->control('Reg_no');
                    echo $this->Form->control('Reg_status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
