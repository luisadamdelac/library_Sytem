<div class="page-header">
    <h3 class="page-title"><Borrow and Return Book></h3>
   <a href="<?= site_url('Transactions/borrow_add'); ?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Borrow Book</a>
</div>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <table id="borrowTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Book</th>
                            <th>Category</th>
                            <th>Borrow Date</th>
                            <th>Due Date</th>
                            <th>Return Date</th>
                            <th>Action</th>
                        </tr>     
                    </thead>
                    <tbody>
                        <?php $count = 1;
                            foreach($borrow as $transact) { ?>
                                <tr>
                                    <td><?= $count++; ?></td>
                                    <td><?= $transact->fullname; ?></td>
                                    <td><?= $transact->title; ?> - <?= $transact->author; ?> </td>
                                    <td><?= $transact->category_name; ?></td>
                                    <td><?= $transact->borrow_date; ?></td>
                                    <td><?= $transact->due_date; ?></td>
                                    <td><?= $transact->return_date; ?></td>
                                    <td>
                                        <?php if ($transact->status == 'Borrowed') { ?>
                                            <a href="<?= site_url('Transactions/return/'.$transact->transaction_id); ?>"
                                               class='btn btn-sm btn-primary'
                                               onclick="return confirmReturn();">Return</a>
                                        <?php } else { ?>
                                            <span class="badge badge-success">Returned</span>
                                        <?php } ?>
                                    </td>
                                </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
         </div>
        </div>
    </div>
</div>
<script>
  $(document).ready(function() {
  $('#borrowTable').DataTable({
  pageLength: 5,
  lengthMenu: [5, 10, 20, 50]
    });
});
function confirmReturn() {
    return confirm('Are you sure you want to return this book?');
}
</script>