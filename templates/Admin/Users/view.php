<br>
<div class="card">
  <div class="card-body">
    <h3><?= h($user->id) ?></h3>
    <table class="table table-bordered">
      <tr>
        <th><?= __('Username') ?></th>
        <td><?= h($user->username) ?></td>
      </tr>
      <tr>
        <th><?= __('Status') ?></th>
        <td><?= h($user->status) ?></td>
      </tr>
      <tr>
        <th><?= __('Id') ?></th>
        <td><?= $this->Number->format($user->id) ?></td>
      </tr>
      <tr>
        <th><?= __('Last Login Time') ?></th>
        <td><?= h($user->last_login_time) ?></td>
      </tr>
    </table>
    <div class="back-to-index mt-2">
      <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
    </div>
  </div>
</div>
