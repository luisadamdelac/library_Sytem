<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 12px;
            }
            h3 {
               margin: 0 0 10px 0;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid black;
                padding: 6px;
            }
            th {
                background: white;
            }
        </style>
    </head>
    <body>
        <h3><?= $title ?></h3>
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
                <?php $count = 1; foreach($books as $book) { ?>
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
    </body>
</html>
