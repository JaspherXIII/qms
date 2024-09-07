<br>
<div class="card">
  <div class="card-body">
    <?= $this->Form->create($user) ?>
    <fieldset>
      <legend><?= __('Edit User') ?></legend>
      <div class="form-group">
        <?= $this->Form->label('Username', 'Username', ['class' => 'control-label']) ?>
        <?= $this->Form->text('username', ['class' => 'form-control']) ?>
      </div>
      <div class="form-group">
        <?= $this->Form->label('Password', 'Password', ['class' => 'control-label']) ?>
        <?= $this->Form->password('password', ['class' => 'form-control']) ?>
      </div>
      <div class="form-group">
        <?= $this->Form->label('Last Login Time', 'Last Login Time', ['class' => 'control-label']) ?>
        <?= $this->Form->datetime('last_login_time', ['class' => 'form-control']) ?>
      </div>
    </fieldset>
    <div class="form-group">
      <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
      <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
    </div>
    <?= $this->Form->end() ?>
  </div>
</div>
