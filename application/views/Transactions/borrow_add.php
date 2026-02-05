<div class="card">
    <div class="card-body">
        <h4 class="card-title">Borrow Book</h4>

        <form class="forms-sample" method="post" action="<?= site_url('Transactions/borrow_add'); ?>">
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
            <button type="submit" class="btn btn-primary mr-2">Borrow Book</button>
        </form>
    </div>
</div>