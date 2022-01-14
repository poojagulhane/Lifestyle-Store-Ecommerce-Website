<?php
session_start();
if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'] != true)) {
    header("location:login.php");
}

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <?php
    require 'includes\_nav2.php';
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h2 align="center">Your order is confirmed. Thank you for shopping with us.</h2>
                    <hr>
                    <p align="center">Click <a href="products1.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- jQuery library -->



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
    require 'includes\footer.php';
    ?>
</body>

</html>