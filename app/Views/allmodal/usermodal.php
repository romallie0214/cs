<!-- Modal -->
<!-- Adding -->


<div class="modal fade" id="AddUserModal" tabindex="-1" role="dialog" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmployeeModalLabel">Add Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('user/add') ?>" method="post">
                    <div class="form-group">
                        <label for="employee_number">Employee Number</label>
                        <input type="text" class="form-control" id="employee_number" name="employee_number" required>
                    </div>
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="middle_name">Middle Name</label>
                        <input type="text" class="form-control" id="middle_name" name="middle_name" required>
                    </div>

                    <div class="form-group">
                        <label for="user_level">User Level</label>
                        <select class="form-control" id="user_level" name="user_level" required>
                            <option value="1">Admin</option>
                            <option value="2">Encoder</option>
                            <option value="3">Another Role</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password">Password (SHA1)</label>
                        <input type="text" class="form-control" id="password" name="password" required>
                        <button type="button" class="btn btn-secondary mt-2" id="generatePassword">Auto Generate Password</button>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Employee</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript to handle generating a random password
    document.getElementById('generatePassword').addEventListener('click', function() {
        // Generate a random password (you can customize this)
        const randomPassword = Math.random().toString(36).slice(2, 10);
        
        // Set the generated password in the input field
        document.getElementById('password').value = randomPassword;
    });
</script>


<!-- View -->
<!-- app/Views/allmodal/usermodal.php -->

<div class="modal fade" id="ViewUserModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">User Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">    
                <form action="<?= base_url('user/updateUser') ?>" method="post">       
                    <input type="hidden" id="id" name="id" class="form-control" value="" readonly>     
                    <label for="employeeNumber">Employee Number:</label>
                    <input type="text" id="employeeNumber" name="employeeNumber" class="form-control" value="" readonly>


                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" class="form-control"  readonly>

                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" class="form-control" readonly>

                    <label for="middleName">Middle Name:</label>
                    <input type="text" id="middleName" name="middleName" class="form-control" readonly>

                    <label for="userLevel">User Level:</label>
                    <select class="form-control" id="userLevel" name="userLevel" disabled>
                        <option value="1">Admin</option>
                        <option value="2">Encoder</option>
                        <option value="3">Another Role</option>
                    </select>
                    
            </div>
            <div class="modal-footer">
                <button type="submit" id="btn_update" class="btn btn-primary">Update</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
   </div>
   <div class="modal-body">
    <p>Are you sure you want to delete?</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
    <button type="button" id="conBtn" onclick="deleteUser();" class="btn btn-danger">Yes</button>
   </div>
  </div>
 </div>
</div>

<script>
    // JavaScript code to handle modal interactions and AJAX requests
    // Example code for opening modals

    function ViewUserModal(user_id) {
        $.ajax({  
            url:"<?=base_url(); ?>user/getUserByID",  
            method:"POST",  
            data:{user_id:user_id},  
            dataType:"json",  
            success:function(data)  
            {
                $('#employeeNumber').attr('readonly', true);
                $('#firstName').attr('readonly', true);
                $('#lastName').attr('readonly', true);
                $('#middleName').attr('readonly', true);         
                $('#userLevel').attr('disabled', true);

                $('#btn_update').hide();
                $('#employeeNumber').val(data.empno);  
                $('#firstName').val(data.firstname);
                $('#lastName').val(data.lastname);
                $('#middleName').val(data.middlename);                
                $('#user_level').val(data.userlevel);  
                $('#ViewUserModal').modal('show');  
            }  
        })
    }

    function openEditItemModal(user_id) {
        $.ajax({  
            url:"<?=base_url(); ?>user/getUserByID",  
            method:"POST",  
            data:{user_id:user_id},  
            dataType:"json",  
            success:function(data)  
            {                
                $('#btn_update').show();
                $('#employeeNumber').removeAttr('readonly');
                $('#firstName').removeAttr('readonly');
                $('#lastName').removeAttr('readonly');
                $('#middleName').removeAttr('readonly');              
                $('#userLevel').removeAttr('disabled');

                $('#id').val(data.id);  
                $('#employeeNumber').val(data.empno);  
                $('#firstName').val(data.firstname);
                $('#lastName').val(data.lastname);
                $('#middleName').val(data.middlename);                
                $('#userLevel').val(data.userlevel);
                $('#ViewUserModal').modal('show');
            }  
        })
    }


    function openDeleteConfirmModal(user_id){
        $('#conBtn').data('id',user_id);
        $('#deleteModal').modal('show');
    }

    function deleteUser() {
        const user_id = $('#conBtn').data('id');
        $.ajax({  
            url:"<?=base_url(); ?>user/deleteUser",  
            method:"POST",  
            data:{user_id:user_id},  
            // dataType:"json",  
            success:function(data)  
            {                
                // if(data){
                //     alert("User deleted successfully");
                // }else{
                //     alert("An error was encountered while trying to delete user.");
                // }
                window.location.href = "<?=base_url()?>/user/index"; 
            }  
        })
    }

</script>