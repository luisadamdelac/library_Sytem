<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="page-title">Return Book</h3>
</div>

<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#returnModal">
    <i class="mdi mdi-plus"></i> Return Book
</button>

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
                        <label>Transaction ID</label>
                        <input type="text" name="transaction_id" class="form-control" required>
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
