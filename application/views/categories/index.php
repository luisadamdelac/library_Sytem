<div>
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4 class="card-title">categories</h4>
            <a href="<?= base_url('categories/add'); ?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Add Category</a>
        </div>

        <table class="table table-border mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                    foreach ($categories as $c) { ?>
                        <tr>
                            <td><?= $i++;?></td>
                            <td><?= $c->category_name;?></td>
                            <td>
                                <a href="<?= base_url('categories/edit/'.$c->category_id); ?>" class="btn btn-sm btn-primary"> <i class="mdi mdi-pencil"></i> Edit</a>
                                <a href="<?= base_url('categories/delete/'.$c->category_id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')"> <i class="mdi mdi-delete"></i> Delete</a>
                            </td>
                        </tr>
                <?php }?>
            </tbody>
        </table>
        <script>
            $(document).ready(function() {
                $('#categoriesTable').DataTable({
                    pageLength: 5
                });
            });
        </script>
    </div>
</div>
