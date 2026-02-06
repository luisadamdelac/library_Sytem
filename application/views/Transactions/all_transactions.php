<div class="d-flex justify-content-between align-items-center mb-3">

    <h3 class="page-title">Transaction</h3>

</div>



<div class="card">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-striped table-bordered" id="transTable">

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

                        <th>Action</th>

                    </tr>

                </thead>

                

                <tbody>

                    <?php $i = 1;

                    foreach($borrow as $tr) {?>

                        <tr>

                            <td><?= $i++?></td>

                            <td><a href="<?= site_url('Users'); ?>"><?= $tr->fullname;?></a></td>

                            <td><?= $tr->title;?></td>

                            <td><?= $tr->category_name;?></td>

                            <td><?= $tr->borrow_date;?></td>

                            <td><?= $tr->due_date; ?> </td>

                            <td><?= $tr->return_date; ?> </td>

                            <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#returnModal" data-transaction-id="<?= $tr->transaction_id ?>" data-user="<?= $tr->fullname ?>">Return</button></td>

                        </tr>

                    <?php }?>

                </tbody>

            </table>

        </div>

    </div>

</div>

      

<div class="modal fade" id="returnModal" tabindex="-1" aria-labelledby="returnModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="returnModalLabel">Return Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="forms-sample" method="post" action="<?= site_url('transactions/return_save'); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label>User</label>
                        <input type="text" id="modalUser" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Transaction ID</label>
                        <input type="text" name="transaction_id" id="modalTransactionId" class="form-control" required readonly>
                    </div>
                    <div class="form-group">
                        <label>Actual Return Date</label>
                        <input type="date" name="actual_return_date" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Return Book</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#transTable').DataTable({
            autoWidth: false,
            columnDefs: [
                { width: '3%', targets: 0 },  // #
                { width: '8%', targets: 1 },  // Student No
                { width: '12%', targets: 2 }, // Name
                { width: '15%', targets: 3 }, // Email
                { width: '6%', targets: 4 },  // Role
                { width: '12%', targets: 5 }, // Book
                { width: '8%', targets: 6 },  // Category
                { width: '8%', targets: 7 },  // Borrow Date
                { width: '8%', targets: 8 },  // Due Date
                { width: '8%', targets: 9 },  // Return Date
                { width: '12%', targets: 10 } // Action
            ]
        });

        // Handle return button click
        $('#transTable').on('click', '.btn-primary', function() {
            var transactionId = $(this).data('transaction-id');
            var user = $(this).data('user');
            $('#modalTransactionId').val(transactionId);
            $('#modalUser').val(user);
        });
    });
</script>
