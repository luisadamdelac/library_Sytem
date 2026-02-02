<div class="page-header">
    <h3 class="page-title">All Transactions</h3>
</div>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table id="transactionsTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Book Title</th>
                                <th>Member</th>
                                <th>Borrow Date</th>
                                <th>Return Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1;
                            foreach ($Transactions as $transaction) { ?>
                                <tr>
                                    <td><?= $count++;?></td>
                                    <td><?= $transaction->book_title;?></td>
                                    <td><?= $transaction->fullname;?></td>
                                    <td><?= $transaction->borrow_date;?></td>
                                    <td><?= $transaction->return_date;?></td>
                                    <td><span class="badge badge-<?= $transaction->status == 'Borrowed' ? 'warning' : 'success'; ?>"><?= $transaction->status;?></span></td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>

                    <script>
                        $(document).ready(function() {
                            $('#transactionsTable').DataTable({
                                pageLength: 5
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
