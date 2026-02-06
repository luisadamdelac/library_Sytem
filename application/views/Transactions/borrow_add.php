<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="page-title">Borrow Book</h3>
</div>

<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#borrowModal">
    <i class="mdi mdi-plus"></i> Borrow Book
</button>

<div class="modal fade" id="borrowModal" tabindex="-1" aria-labelledby="borrowModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="borrowModalLabel">Borrow Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Borrow Book</button>
                </div>
            </form>
        </div>
    </div>
</div>
