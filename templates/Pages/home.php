<div class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="<?= $this->Url->webroot('logo.png') ?>" alt="Logo">
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><?= __('Northeastern College') ?></p>
                <div class="row">
                    <div class="col-12">
                        <?= $this->Html->link(__('Admin'), ['prefix' => 'Admin', 'controller' => 'Admins', 'action' => 'login'], ['class' => 'btn btn-block btn-primary']) ?>
                        <?= $this->Html->link(__('User'), ['prefix' => 'User', 'controller' => 'Users', 'action' => 'login'], ['class' => 'btn btn-block btn-success']) ?>
                        <?= $this->Html->link(__('Guest'), ['controller' => 'Appointments', 'action' => 'add'], ['class' => 'btn btn-block btn-warning']) ?>
                        <?= $this->Html->link(__('Queue'), ['controller' => 'Appointments', 'action' => 'queues'], ['class' => 'btn btn-block btn-secondary']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
