
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?= __('Appointments') ?></h3>
        <?= $this->Html->link(__('New Appointment'), ['action' => 'add'], ['class' => 'btn btn-primary float-right']) ?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('customer_name') ?></th>
                        <th><?= $this->Paginator->sort('appointment_time') ?></th>
                        <th><?= $this->Paginator->sort('purpose') ?></th>
                        <th><?= $this->Paginator->sort('status') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($appointments as $appointment): ?>
                    <tr>
                        <td><?= $this->Number->format($appointment->id) ?></td>
                        <td><?= h($appointment->customer_name) ?></td>
                        <td><?= h($appointment->appointment_time) ?></td>
                        <td><?= h($appointment->purpose) ?></td>
                        <td><?= h($appointment->status) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $appointment->id], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appointment->id], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id), 'class' => 'btn btn-sm btn-danger']) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <?= $this->Paginator->first('<i class="fas fa-angle-double-left"></i> ' . __('First'), ['escape' => false, 'class' => 'page-link']) ?>
            <?= $this->Paginator->prev('<i class="fas fa-angle-left"></i> ' . __('Previous'), ['escape' => false, 'class' => 'page-link']) ?>
            <?= $this->Paginator->numbers(['separator' => '', 'class' => 'page-link']) ?>
            <?= $this->Paginator->next(__('Next') . ' <i class="fas fa-angle-right"></i>', ['escape' => false, 'class' => 'page-link']) ?>
            <?= $this->Paginator->last(__('Last') . ' <i class="fas fa-angle-double-right"></i>', ['escape' => false, 'class' => 'page-link']) ?>
        </ul>
        <p class="text-muted float-left"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
