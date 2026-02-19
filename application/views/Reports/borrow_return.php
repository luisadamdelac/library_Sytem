<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="page-title">Borrow / Return Report</h3>
    <div>
        <button onclick="window.print()" class="btn btn-success"><i class="mdi mdi-printer"></i> Print</button>
        <a href="#" class="btn btn-secondary"><i class="mdi mdi-file-pdf"></i> Download PDF</a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="borrowReturnTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Book</th>
                        <th>Category</th>
                        <th>Borrow Date</th>
                        <th>Due Date</th>
                        <th>Return Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; if(!empty($transactions)): ?>
                        <?php foreach($transactions as $tr): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $tr->student_no; ?></td>
                                <td><?= $tr->fullname; ?></td>
                                <td><?= $tr->email; ?></td>
                                <td><?= $tr->role_name; ?></td>
                                <td><?= $tr->title; ?></td>
                                <td><?= $tr->category_name; ?></td>
                                <td><?= $tr->borrow_date; ?></td>
                                <td><?= $tr->due_date; ?></td>
                                <td><?= $tr->return_date ? $tr->return_date : 'Not Returned'; ?></td>
                                <td>
                                    <?php if($tr->status == 'Borrowed'): ?>
                                        <span class="badge badge-warning">Borrowed</span>
                                    <?php else: ?>
                                        <span class="badge badge-success">Returned</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="11" class="text-center">No transactions found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#borrowReturnTable').DataTable();
    });
</script>
