<div class="card">
   <div class="card-body">
    <h4 class="card-title">Adding of New Book</h4>

    <form action="<?= site_url('Books/save')?>" method="post">
        <div class="form-group">
            <label for="">Book Title</label>
            <input type="text" name="title" id="" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input type="text" name="author" id="" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" class="form-control" id="" required>
                <option value=""> Please Select Category</option>
                <?php foreach ($categories as $c) { ?>
                <option value="<?= $c->category_id;?>"><?= $c->category_name;?></option>
                <?php } ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary"> <i class="mdi mdi-content-save"></i> Save Book</button>
        <a href="<?= site_url('Books');?>" class="btn btn-danger">Cancel</a>

    </form>
   </div>
</div>