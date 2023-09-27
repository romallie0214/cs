<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url ('plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url ('dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini">
    
    <div class = "app">
        <?= $this->include('layout/include/navbar')?>
        <?= $this->include('layout/include/sidebar')?>
        <?= $this->renderSection('content') ?>
    </div>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE -->
<script src="<?= base_url('dist/js/adminlte.js') ?>"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url('plugins/chart.js/Chart.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('dist/js/demo.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('dist/js/pages/dashboard3.js') ?>"></script>
</body>
</html>
