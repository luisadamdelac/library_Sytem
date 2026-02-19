<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="page-title">Users Report</h3>
    <div>
        <button onclick="window.print()" class="btn btn-success"><i class="mdi mdi-printer"></i> Print</button>
        <a href="#" class="btn btn-secondary"><i class="mdi mdi-file-pdf"></i> Download PDF</a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="usersTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student No</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; if(!empty($users)): ?>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $user->student_no; ?></td>
                                <td><?= $user->Lname; ?></td>
                                <td><?= $user->Fname; ?></td>
                                <td><?= $user->Mname ? $user->Mname : ''; ?></td>
                                <td><?= $user->email ? $user->email : 'N/A'; ?></td>
                                <td><?= $user->role_name; ?></td>
                                <td>
                                    <?php if(isset($user->status) && $user->status == 'active'): ?>
                                        <span class="badge badge-success">Active</span>
                                    <?php else: ?>
                                        <span class="badge badge-secondary">Inactive</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center">No users found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#usersTable').DataTable();
    });
</script>
