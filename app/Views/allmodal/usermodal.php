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
                <label for="employeeNumber">Employee Number:</label>
               <<input type="text" id="employeeNumber" class="form-control" value="<?= $user->empno ?>" readonly>


                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" class="form-control"  readonly>

                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" class="form-control" readonly>

                <label for="middleName">Middle Name:</label>
                <input type="text" id="middleName" class="form-control" readonly>

                <label for="userLevel">User Level:</label>
                <input type="text" id="userLevel" class="form-control" readonly>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript code to handle modal interactions and AJAX requests
    // Example code for opening modals

    function ViewUserModal() {
        console.log('Open View Item Modal');
        $('#ViewUserModal').modal('show');


        // Include your logic to populate the "View Item" modal content here
    }

    function openEditItemModal() {
        $('#editItemModal').modal('show');
        // Include your logic to populate the "Edit Item" modal content here
    }
</script>