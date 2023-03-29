<?php
require('config.php');

if (isset($_POST['submit'])) {
    try {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `users` VALUES ('', '$name', '$email', '$phone')";
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    echo "<script>alert('User Data submited successfully.')</script>";
    echo "<script>window.open('view-all-users.php','_self')</script>";
}



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input User' Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container fluid text-center ">
        <div class="col">
            <div class="row mt-20">
                <h4 class="header">Enter User Data </h4>
                <br><br>
                <form action="#" method="POST">

                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="name">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="email">Last name</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="email">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="phone">Phone number</label>
                                <input type="text" id="phone" name="phone" class="form-control"
                                    placeholder="phone number">

                            </div>
                        </div>

                    </div>
                    <!-- Submit button -->
                    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Submit Data</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>