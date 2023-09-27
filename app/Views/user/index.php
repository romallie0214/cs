<?= $this->extend('layout/general-layout.php') ?>
<?= $this ->section('content')  ?>

<div class="wrapper">




  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">User Masterlist</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            
                            <table id="example1" class="table table-bordered table-striped">
                                <div class="row mb-2">
                                    <a class="btn btn-success" href="#" role="button" title="View"> Add</i></a>                             
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEmployeeModal">
                                        Add Employee
                                    </button>
                                </div>
                                <thead>
                                
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Lastname</th>
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>User Level</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>     
                                <tbody>
                                    <?php foreach ($user as $user):?> 
                                    <tr>
                                        <td><?=$user->empno?></td>
                                        <td><?=$user->lastname?></td>
                                        <td><?=$user->firstname?></td>
                                        <td><?=$user->middlename?></td>
                                        <td><?=$user->userlevel?></td>
                                        <td>
                                            <a class="btn btn-primary" href="<?=base_url()?>user/view" role="button" title="View">  <i class="fa fa-search"></i></a>
                                            <a class="btn btn-warning" href="<?=base_url()?>user/edit" role="button" title="Edit">  <i class="fa fa-id-card"></i></a>
                                            <a class="btn btn-danger" href="<?=base_url()?>user/delete" role="button" title="Delete">  <i class="fa fa-minus-square"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>  
                                </tbody>
                            
                                <tfoot>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Lastname</th>
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>User Level</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                                        
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?= $this->include('allmodal/usermodal')?>
  
  
  
  
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2023-2024 <a href="#">RMOcampo</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<?= $this ->endSection() ?>