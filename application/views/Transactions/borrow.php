<div class="page-header">
    <h3 class="page-title">Borrow and Return Book</h3>
   <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#borrowModal"><i class="mdi mdi-plus"></i> Borrow Book</button>
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
  lengthMenu: [5, 10, 20, 50],
  columns: [
      null,
      null,
      null,
      null,
      null,
      null,
      null
  ]
    });
});
function confirmReturn() {
    return confirm('Are you sure you want to return this book?');
}
</script>

<div class="modal fade" id="borrowModal" tabindex="-1" aria-labelledby="borrowModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="borrowModalLabel">Borrow Book</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <form class="forms-sample" method="post" action="<?= site_url('Transactions/borrow_add'); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Select User</label>
                        <select name="user_id" class="form-control"  required>
                            <option value="">Select User</option>
                            <?php foreach($users as $u) { ?>
                                <option value="<?= $u->user_id; ?>"><?= $u->fullname; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Select Book</label>
                        <select name="book_id" class="form-control" required>
                            <option value="">Select a book</option>
                            <?php foreach($books as $b) { ?>
                                <option value="<?= $b->book_id; ?>">
                                    <?= $b->title; ?> - <?= $b->author; ?>(<?= $b->category_name?>)</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Borrow Date</label>
                        <input type="date" name="borrow_date" class="form-control" value="<?= date('Y-m-d'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Due Date</label>
                        <input type="date" name="due_date" class="form-control" value="<?= date('Y-m-d', strtotime('+7 days')); ?>" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Borrow Book</button>
                </div>
            </form>
        </div>
    </div>
</div>
