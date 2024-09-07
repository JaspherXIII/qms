<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button"><i class="fas fa-expand-arrows-alt"></i></a>
    </li>
    <li class="nav-item mt-2">
      <?= $this->Html->link('<i class="fas fa-sign-out-alt"></i>', ['controller' => 'Pages', 'action' => 'home'], [
        'escape' => false,
        'confirm' => __('Are you sure you want to go back?'),
        'role' => 'button',
        'class' => 'text-secondary'
      ]) ?>
    </li>
  </ul>
</nav>

