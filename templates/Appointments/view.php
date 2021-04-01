<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment $appointment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Appointment'), ['action' => 'edit', $appointment->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Appointment'), ['action' => 'delete', $appointment->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Appointments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Appointment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appointments view content">
            <h3><?= h($appointment->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('App Time') ?></th>
                    <td><?= h($appointment->App_Time) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($appointment->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('App Date') ?></th>
                    <td><?= h($appointment->App_Date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('App Loaction') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($appointment->App_loaction)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
