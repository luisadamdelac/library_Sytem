<div>
    <div class="card-body">
        <h4 class="card-title">Add Category</h4>
        <form action="<?= base_url('categories/save'); ?>" method="post">
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="<?= base_url('categories'); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
