<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clinician[]|\Cake\Collection\CollectionInterface $clinicians
 */
?>
<div class="clinicians index content">
    <?= $this->Html->link(__('New Clinician'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clinicians') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('Reg_no') ?></th>
                    <th><?= $this->Paginator->sort('Reg_status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clinicians as $clinician): ?>
                <tr>
                    <td><?= $this->Number->format($clinician->ID) ?></td>
                    <td><?= h($clinician->Reg_no) ?></td>
                    <td><?= h($clinician->Reg_status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $clinician->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clinician->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clinician->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $clinician->ID)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
