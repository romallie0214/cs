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
                            <?php if(session()->getFlashdata('msg') != ''): ?>
                                <div class="alert alert-<?=session()->getFlashdata('alert')?>">
                                    <strong><?=session()->getFlashdata('msg')?></strong>
                                </div>
                            <?php  endif; ?>
                                <div class="row mb-2">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#AddUserModal">
                                        Add User
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
                                    <?php foreach ($users as $user):?> 
                                    <tr>
                                        <td><?=$user->empno?></td>
                                        <td><?=$user->lastname?></td>
                                        <td><?=$user->firstname?></td>
                                        <td><?=$user->middlename?></td>
                                        <td><?=$user->userlevel?></td>
                                        <td>
      
                              
                                        <button class="btn btn-primary" onclick="ViewUserModal(<?= $user->id; ?>)">View</button>
                                        <button class="btn btn-warning" onclick="openEditItemModal(<?= $user->id; ?>)"><i class="fa fa-id-card"></i></button>                                        
                                        <button class="btn btn-danger" onclick="openDeleteConfirmModal(<?= $user->id; ?>)"><i class="fa fa-minus-square"></i></button>
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

  <?= view('allmodal/usermodal') ?>
  
 
  
  
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

