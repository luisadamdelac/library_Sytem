<div class="d-flex justify-content-between align-items-center mb-3">

    <h3 class="page-title">Transaction</h3>

</div>



<div class="card">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-striped table-bordered" id="transTable">

                <thead>

                    <tr>

                        <th>#</th>

                        <th>Student No</th>

                        <th>Name</th>

                        <th>Email</th>

                        <th>Role</th>

                        <th>Book</th>

                        <th>Category</th>

                        <th>Borrow Date</th>

                        <th>Due Date</th>

                        <th>Return Date</th>

                    </tr>

                </thead>

                

                <tbody>

                    <?php $i = 1;

                    foreach($borrow as $tr) {?>

                        <tr>

                            <td><?= $i++?></td>

                            <td><?= $tr->student_no;?></td>

                            <td><a href="<?= site_url('Users'); ?>"><?= $tr->fullname;?></a></td>

                            <td><?= $tr->email;?></td>

                            <td><?= $tr->role_name;?></td>

                            <td><?= $tr->title;?></td>

                            <td><?= $tr->category_name;?></td>

                            <td><?= $tr->borrow_date;?></td>

                            <td><?= $tr->due_date; ?> </td>

                            <td><?= $tr->return_date; ?> </td>

                        </tr>

                    <?php }?>

                </tbody>

            </table>

        </div>

    </div>

</div>

      

<script>
    $(document).ready(function() {
        $('#transTable').DataTable({
            autoWidth: false,
            columns: [
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null
            ],
            columnDefs: [
                { width: '3%', targets: 0 },  // #
                { width: '8%', targets: 1 },  // Student No
                { width: '12%', targets: 2 }, // Name
                { width: '15%', targets: 3 }, // Email
                { width: '6%', targets: 4 },  // Role
                { width: '12%', targets: 5 }, // Book
                { width: '8%', targets: 6 },  // Category
                { width: '8%', targets: 7 },  // Borrow Date
                { width: '8%', targets: 8 },  // Due Date
                { width: '8%', targets: 9 }  // Return Date
            ]
        });
    });
</script>
