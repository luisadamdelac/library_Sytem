<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add New User</h4>
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form action="<?= site_url('Users/add'); ?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="student_no">Student Number *</label>
                                <input type="text" class="form-control" id="student_no" name="student_no" value="<?= set_value('student_no'); ?>" required>
                                <?= form_error('student_no', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="role_id">Role *</label>
                                <select class="form-control" id="role_id" name="role_id" required>
                                    <option value="">Select Role</option>
                                    <?php foreach ($roles as $role): ?>
                                        <option value="<?= $role->role_id; ?>" <?= set_select('role_id', $role->role_id); ?>>
                                            <?= $role->role_name; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('role_id', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Lname">Last Name *</label>
                                <input type="text" class="form-control" id="Lname" name="Lname" value="<?= set_value('Lname'); ?>" required>
                                <?= form_error('Lname', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Fname">First Name *</label>
                                <input type="text" class="form-control" id="Fname" name="Fname" value="<?= set_value('Fname'); ?>" required>
                                <?= form_error('Fname', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Mname">Middle Name</label>
                                <input type="text" class="form-control" id="Mname" name="Mname" value="<?= set_value('Mname'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password *</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add User</button>
                        <a href="<?= site_url('Users'); ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
