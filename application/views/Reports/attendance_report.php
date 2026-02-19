<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="page-title">Attendance Report</h3>
    <div>
        <button onclick="window.print()" class="btn btn-success"><i class="mdi mdi-printer"></i> Print</button>
        <a href="#" class="btn btn-secondary"><i class="mdi mdi-file-pdf"></i> Download PDF</a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="attendanceTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Student No</th>
                        <th>Name</th>
                        <th>Book Title</th>
                        <th>Action</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; if(!empty($transactions)): ?>
                        <?php foreach($transactions as $tr): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $tr->borrow_date; ?></td>
                                <td><?= $tr->student_no; ?></td>
                                <td><?= $tr->fullname; ?></td>
                                <td><?= $tr->title; ?></td>
                                <td>
                                    <?php if($tr->status == 'Borrowed'): ?>
                                        <span class="badge badge-info">Borrow</span>
                                    <?php else: ?>
                                        <span class="badge badge-success">Return</span>
                                    <?php endif; ?>
                                </td>
                                <td><?= $tr->borrow_date; ?></td>
                                <td><?= $tr->return_date ? $tr->return_date : 'N/A'; ?></td>
                                <td>
                                    <?php if($tr->status == 'Borrowed'): ?>
                                        <span class="badge badge-warning">Active</span>
                                    <?php else: ?>
                                        <span class="badge badge-success">Completed</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9" class="text-center">No attendance records found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#attendanceTable').DataTable();
    });
</script>
