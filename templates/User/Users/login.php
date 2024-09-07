<div class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="<?= $this->Url->webroot('logo.png') ?>" alt="Logo" height="100">
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><?= __('User Login Form') ?></p>
                <?= $this->Form->create(null, ['class' => 'login-form']) ?>
                <div class="input-group mb-3">
                    <?= $this->Form->text('username', [
                        'class' => 'form-control',
                        'label' => false,
                        'required' => true,
                        'placeholder' => __('Username'),
                    ]) ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <?= $this->Form->password('password', [
                        'class' => 'form-control',
                        'label' => false,
                        'required' => true,
                        'placeholder' => __('Password'),
                    ]) ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary btn-block']) ?>
                        <a href="<?= $this->Url->build('/') ?>" class="btn btn-success mt-3 btn-block"><i class="bi bi-arrow-left"></i> Back</a>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
