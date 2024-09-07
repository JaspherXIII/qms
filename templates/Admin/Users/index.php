<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <?php
          $pageTitle = $this->fetch('title');
          $pageTitle = !empty($pageTitle) ? $pageTitle : 'Users';
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
    <h3 class="card-title"><?= __('All Users') ?></h3>
    <div class="card-tools">
      <?= $this->Html->link(__('Add User'), ['action' => 'add'], ['class' => 'btn btn-primary float-right']) ?>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('username') ?></th>
            <th><?= $this->Paginator->sort('last_login_time') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user): ?>
            <?php $statusClass = ($user->status == 'active') ? 'text-success' : 'text-danger'; ?>
            <tr>
              <td><?= $this->Number->format($user->id) ?></td>
              <td><?= h($user->username) ?></td>
              <td><?= h($user->last_login_time) ?></td>
              <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-sm btn-danger']) ?>
                        </td>
            </tr>
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
