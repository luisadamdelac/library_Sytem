<div class="page-header">
    <h3 class="page-title">All Books</h3>
</div>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-striped">
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
                            <?php $count = 1;
                            foreach ($books as $book) { ?>
                                <tr>
                                    <td><?= $count++;?></td>
                                    <td><?= $book->title;?></td>
                                    <td><?= $book->author;?></td>
                                    <td><?= $book->category_name;?></td>
                                    <td><?= $book->status;?></td>
                                </tr>
                            <?php }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>