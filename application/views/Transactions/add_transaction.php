<div class="card">
   <div class="card-body">
    <h4 class="card-title">Borrow Book</h4>

    <form action="<?= site_url('transactions/save')?>" method="post">
        <div class="form-group">
            <label for="">Book</label>
            <select name="book_id" class="form-control" id="" required>
                <option value=""> Please Select Book</option>
                <?php foreach ($books as $b) { ?>
                <option value="<?= $b->book_id;?>"><?= $b->title;?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">User ID</label>
            <input type="text" name="user_id" id="" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Borrow Date</label>
            <input type="date" name="borrow_date" id="" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Due Date</label>
            <input type="date" name="due_date" id="" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary"> <i class="mdi mdi-content-save"></i> Borrow Book</button>
        <a href="<?= site_url('transactions/all_transactions');?>" class="btn btn-danger">Cancel</a>

    </form>
   </div>
</div>
