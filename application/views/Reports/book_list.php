<div class="page-header">
    <h3 class="page-title">All Books</h3>
    <div class="d-flex justify-content-between">
        <a href="<?= site_url('Reports/book_list_pdf'); ?>" class="btn btn-success"><i class="mdi mdi-file-pdf"></i> Download PDF</a>
        <a href="<?= site_url('Categories/add'); ?>" class="btn btn-secondary"><i class="mdi mdi-microsoft-excel"></i> Download EXEL</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

            <div class="table-responsive">
                <table id="booksTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; foreach ($books as $book) { ?>
                            <tr>
                                <td><?= $count++; ?></td>
                                <td><?= $book->title; ?></td>
                                <td><?= $book->author; ?></td>
                                <td><?= $book->category_name; ?></td>
                                <td><?= $book->status; ?></td>
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
        $('#booksTable').DataTable();
    });
</script>
