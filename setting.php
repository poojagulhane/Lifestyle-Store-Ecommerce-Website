<?php
session_start();
if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'] != true)) {
    header("location:login.php");
}

?>
<?php

?>
<?php
require 'includes\_nav2.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="index.css">
    <!-- Latest compiled and minified CSS -->


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->

</head>

<body>

    <div class="container">
        <form>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Old Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Retype New Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Change</button>
            </form>

        </form>
    </div>

    <?php
    require 'includes/footer.php';
    ?>
</body>

</html>