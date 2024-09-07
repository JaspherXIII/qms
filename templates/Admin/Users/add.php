<br>
<div class="col-md-8">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><?= __('Add User') ?></h3>
    </div>
    <div class="card-body">
      <?= $this->Form->create($user) ?>
      <div class="form-group">
        <?= $this->Form->label('username', 'Username', ['class' => 'control-label']) ?>
        <?= $this->Form->text('username', ['class' => 'form-control']) ?>
      </div>
      <div class="form-group">
        <?= $this->Form->label('password','Password', ['class' => 'control-label']) ?>
        <?= $this->Form->password('password', ['class' => 'form-control']) ?>
      </div>

        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->button(__('Reset'), ['class' => 'btn btn-default', 'type' => 'reset']) ?>

      <?= $this->Form->end() ?>
    </div>
  </div>
</div>
