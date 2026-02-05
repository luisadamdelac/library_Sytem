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

                        <th>User</th>

                        <th>Book</th>

                        <th>Categor</th>

                        <th>Borrow Date</th>

                        <th>Due Date</th>

                        <th>Return Data</th>

                    </tr>

                </thead>

                

                <tbody>

                    <?php $i = 1;

                    foreach($borrow as $tr) {?>

                        <tr>

                            <td><?= $i++?></td>

                            <td><?= $tr->fullname;?></td>

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

    $(document).ready( function (){

        $('#transTable').DataTable();

    });

</script>