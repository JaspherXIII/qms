<br>
<div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= __('Add Appointment') ?></h3>
            </div>
            <div class="card-body">
                <div class="appointments form">
                    <?= $this->Form->create($appointment) ?>
                    <div class="form-group">
                        <?= $this->Form->label('customer_name', __('Customer Name')) ?>
                        <?= $this->Form->text('customer_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->label('appointment_time', __('Appointment Time')) ?>
                        <?= $this->Form->datetime('appointment_time', ['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->label('purpose', __('Purpose')) ?>
                        <?= $this->Form->textarea('purpose', ['class' => 'form-control', 'rows' => '3']) ?>
                    </div>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
