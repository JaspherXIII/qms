<?php
$cakeDescription = 'Northeastern College - QMS';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $cakeDescription ?></title>
    <?= $this->Html->meta('icon') ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <?= $this->Html->css([
        '/plugins/fontawesome-free/css/all.min.css',
        '/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',
        '/plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
        '/plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
        '/dist/css/adminlte.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css'
    ]) ?>
    <?= $this->Html->script([
        '/plugins/jquery/jquery.min.js',
        'https://cdn.jsdelivr.net/npm/chart.js' 
    ]) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
</head>

<body class="hold-transition sidebar-mini ">
<div class="wrapper">
  <!-- Navbar and Sidebar-->

  <!-- Content Wrapper. Contains page content -->
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?= $this->Flash->render() ?> 
        <?= $this->fetch('content')?>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
    <?= $this->Html->script(['/plugins/jquery/jquery.min.js',
        '/plugins/bootstrap/js/bootstrap.bundle.min.js',
        '/plugins/bs-custom-file-input/bs-custom-file-input.min.js',
        '/plugins/datatables/jquery.dataTables.min.js',
        '/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
        '/plugins/datatables-responsive/js/dataTables.responsive.min.js',
        '/plugins/datatables-responsive/js/responsive.bootstrap4.min.js',
        '/plugins/datatables-buttons/js/dataTables.buttons.min.js',
        '/plugins/datatables-buttons/js/buttons.bootstrap4.min.js',
        '/plugins/jszip/jszip.min.js',
        '/plugins/pdfmake/pdfmake.min.js',
        '/plugins/pdfmake/vfs_fonts.js',
        '/plugins/datatables-buttons/js/buttons.html5.min.js',
        '/plugins/datatables-buttons/js/buttons.print.min.js',
        '/plugins/datatables-buttons/js/buttons.colVis.min.js',
        '/dist/js/adminlte.min.js',
])?>

</body>
</html>
