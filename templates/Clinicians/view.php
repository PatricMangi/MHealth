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
            <?= $this->Html->link(__('Edit Clinician'), ['action' => 'edit', $clinician->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Clinician'), ['action' => 'delete', $clinician->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $clinician->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clinicians'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Clinician'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clinicians view content">
            <h3><?= h($clinician->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Reg No') ?></th>
                    <td><?= h($clinician->Reg_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reg Status') ?></th>
                    <td><?= h($clinician->Reg_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($clinician->ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
