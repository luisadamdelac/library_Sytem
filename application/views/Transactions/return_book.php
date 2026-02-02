<div class="card">
   <div class="card-body">
    <h4 class="card-title">Return Book</h4>

    <form action="<?= site_url('transactions/return_save')?>" method="post">
        <div class="form-group">
            <label for="">Transaction ID</label>
            <input type="text" name="transaction_id" id="" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Actual Return Date</label>
            <input type="date" name="actual_return_date" id="" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary"> <i class="mdi mdi-content-save"></i> Return Book</button>
        <a href="<?= site_url('transactions/all_transactions');?>" class="btn btn-danger">Cancel</a>

    </form>
   </div>
</div>
