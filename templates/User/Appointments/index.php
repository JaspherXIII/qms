<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <?php
                $pageTitle = $this->fetch('title');
                $pageTitle = !empty($pageTitle) ? $pageTitle : 'Appointments';
                $pageTitle = str_replace("Admin/", "", $pageTitle);
                ?>
                <h1 class="m-0"><?= $pageTitle ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">QMS</a></li>
                    <li class="breadcrumb-item active"><?= $pageTitle ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?= __('New Appointments') ?></h3>
        <?= $this->Html->link(__('Add Appointment'), ['action' => 'add'], ['class' => 'btn btn-primary float-right']) ?>
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
                        <?php if ($appointment->status !== 'completed'): ?>
                            <tr>
                                <td><?= $this->Number->format($appointment->id) ?></td>
                                <td><?= h($appointment->customer_name) ?></td>
                                <td><?= h($appointment->appointment_time) ?></td>
                                <td><?= h($appointment->purpose) ?></td>
                                <td>
                                    <?php
                                    $statusClass = '';
                                    switch ($appointment->status) {
                                        case 'waiting':
                                            $statusClass = 'badge badge-warning';
                                            break;
                                        case 'in progress':
                                            $statusClass = 'badge badge-primary';
                                            break;
                                        default:
                                            $statusClass = 'badge';
                                            break;
                                    }
                                    ?>
                                    <span class="<?= $statusClass ?>"><?= h($appointment->status) ?></span>
                                </td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $appointment->id], ['class' => 'btn btn-sm btn-info']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appointment->id], ['class' => 'btn btn-sm btn-primary']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id), 'class' => 'btn btn-sm btn-danger']) ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <?= $this->Paginator->first('<li class="page-item"><span class="page-link">' . __('First') . '</span></li>', ['escape' => false]) ?>
            <?= $this->Paginator->prev('<li class="page-item"><span class="page-link">' . __('Previous') . '</span></li>', ['escape' => false]) ?>
            <?= $this->Paginator->numbers(['modulus' => 2, 'class' => 'page-item']) ?>
            <?= $this->Paginator->next('<li class="page-item"><span class="page-link">' . __('Next') . '</span></li>', ['escape' => false]) ?>
            <?= $this->Paginator->last('<li class="page-item"><span class="page-link">' . __('Last') . '</span></li>', ['escape' => false]) ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
