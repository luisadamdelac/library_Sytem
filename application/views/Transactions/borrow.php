<div class="page-header">
    <h1 class="page-title">All Transactions</h1>
</div>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

            <div class="table-responsive">
                <table id="booksTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Book</th>
                            <th>Category</th>
                            <th>Borrow Date</th>
                            <th>Due Date</th>
                            <th>Return Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;
                            foreach($transactions as $transact) { ?>
                                <tr>
                                    <td><?= $count++; ?></td>
                                    <td><?= $transact->fullname; ?></td>
                                    <td><?= $transact->title; ?> - <?= $transact->author; ?> </td>
                                    <td><?= $transact->category_name; ?></td>
                                    <td><?= $transact->borrow_date; ?></td>
                                    <td><?= $transact->due_date; ?></td>
                                    <td><?= $transact->return_date; ?></td>
                                    <td><span class="badge badge-<?= $transact->status == 'Borrowed' ? 'warning' : 'success'; ?>"><?= $transact->status;?></span></td>
                                </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
         </div>
        </div>
    </div>
</div>