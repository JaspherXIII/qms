<br>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= __('Appointment Details') ?></h3>
            </div>
            <div class="card-body">
                <div class="appointments view">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th><?= __('ID') ?></th>
                                <td><?= h($appointment->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Customer Name') ?></th>
                                <td><?= h($appointment->customer_name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Purpose') ?></th>
                                <td><?= h($appointment->purpose) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($appointment->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Appointment Time') ?></th>
                                <td><?= h($appointment->appointment_time) ?></td>
                            </tr>

                        </tbody>
                    </table>
                    <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
    </div>
</div>
