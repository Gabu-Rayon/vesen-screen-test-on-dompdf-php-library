<?php 
require('config.php');
$statement = $conn->prepare('SELECT * FROM users');
 $statement->execute(array());

$us = 0;

$k = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Users In the Database </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-9 ">
                <h1 class="h4"> All Users </h1>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th> No: </th>
                            <th> Name: </th>
                            <th> Email: </th>
                            <th> Phone: </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                      foreach($statement as $row) {

                            ?>
                        <tr>
                            <td><?php echo $k++; ?></td>
                            <td> <?php echo $row['name'] ; ?></td>
                            <td><?php  echo $row['email'] ; ?></td>
                            <td><?php  echo $row['phone'] ; ?></td>
                        </tr>

                        <?php } ?>

                    </tbody>
                </table>
                <a href="pdf.php" target="_blank" class="btn btn-primary">Print ALL Users</a>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>