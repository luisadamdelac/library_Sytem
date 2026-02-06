<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title">Users</h4>
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        <i class="mdi mdi-plus"></i> Add User
                    </button>
                </div>
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Student No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($users)): ?>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td><?= $user->student_no; ?></td>
                                        <td><?= $user->Lname . ', ' . $user->Fname . ' ' . $user->Mname; ?></td>
                                        <td><?= $user->email ?: 'N/A'; ?></td>
                                        <td>
                                            <span class="badge badge-info"><?= $user->role_name; ?></span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editUserModal" onclick="editUser(<?= $user->user_id; ?>, '<?= $user->student_no; ?>', '<?= $user->Lname; ?>', '<?= $user->Fname; ?>', '<?= $user->Mname; ?>', '<?= $user->email; ?>', <?= $user->role_id; ?>)">
                                                <i class="mdi mdi-pencil"></i> Edit
                                            </button>
                                            <a href="<?= site_url('Users/delete/' . $user->user_id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">
                                                <i class="mdi mdi-delete"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
    </div>
</div>

<script>
function editUser(userId, studentNo, Lname, Fname, Mname, email, roleId) {
    document.getElementById('edit_user_id').value = userId;
    document.getElementById('edit_student_no').value = studentNo;
    document.getElementById('edit_Lname').value = Lname;
    document.getElementById('edit_Fname').value = Fname;
    document.getElementById('edit_Mname').value = Mname;
    document.getElementById('edit_email').value = email;
    document.getElementById('edit_role_id').value = roleId;
}
</script>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= site_url('Users/edit'); ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" id="edit_user_id" name="user_id">
                    <div class="form-group">
                        <label for="edit_student_no">Student No *</label>
                        <input type="text" name="student_no" class="form-control" id="edit_student_no" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_Lname">Last Name *</label>
                        <input type="text" name="Lname" class="form-control" id="edit_Lname" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_Fname">First Name *</label>
                        <input type="text" name="Fname" class="form-control" id="edit_Fname" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_Mname">Middle Name</label>
                        <input type="text" name="Mname" class="form-control" id="edit_Mname">
                    </div>
                    <div class="form-group">
                        <label for="edit_email">Email</label>
                        <input type="email" name="email" class="form-control" id="edit_email">
                    </div>
                    <div class="form-group">
                        <label for="edit_role_id">Role *</label>
                        <select name="role_id" class="form-control" id="edit_role_id" required>
                            <option value="">Select Role</option>
                            <?php foreach ($roles as $role): ?>
                                <option value="<?= $role->role_id; ?>"><?= $role->role_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_password">Password (leave blank to keep current)</label>
                        <input type="password" name="password" class="form-control" id="edit_password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update User</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= site_url('Users/add'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="student_no">Student No *</label>
                        <input type="text" name="student_no" class="form-control" id="student_no" required>
                    </div>
                    <div class="form-group">
                        <label for="Lname">Last Name *</label>
                        <input type="text" name="Lname" class="form-control" id="Lname" required>
                    </div>
                    <div class="form-group">
                        <label for="Fname">First Name *</label>
                        <input type="text" name="Fname" class="form-control" id="Fname" required>
                    </div>
                    <div class="form-group">
                        <label for="Mname">Middle Name</label>
                        <input type="text" name="Mname" class="form-control" id="Mname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="role_id">Role *</label>
                        <select name="role_id" class="form-control" id="role_id" required>
                            <option value="">Select Role</option>
                            <?php foreach ($roles as $role): ?>
                                <option value="<?= $role->role_id; ?>"><?= $role->role_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add User</button>
                </div>
            </form>
        </div>
    </div>
</div>
