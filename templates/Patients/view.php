<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patient $patient
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Patient'), ['action' => 'edit', $patient->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Patient'), ['action' => 'delete', $patient->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $patient->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Patients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Patient'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="patients view content">
            <h3><?= h($patient->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($patient->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('P BOD') ?></th>
                    <td><?= h($patient->P_BOD) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('P Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($patient->P_address)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
