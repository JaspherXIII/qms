<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <?php
          $pageTitle = $this->fetch('title');
          $pageTitle = !empty($pageTitle) ? $pageTitle : 'Dashboard';
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

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $totalUsers ?></h3>
            <p>Total Users</p>
          </div>
          <div class="icon">
            <i class="fas fa-user"></i>
          </div>
          <a href="<?= $this->Url->build('/admin/users') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $totalAppointments ?></h3>
            <p>Total Appointments</p>
          </div>
          <div class="icon">
            <i class="fas fa-calendar"></i>
          </div>
          <a href="<?= $this->Url->build('/admin/appointments') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
