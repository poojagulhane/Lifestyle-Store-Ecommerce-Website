
<?php
if(isset($_SESSION['shop']) && $_SESSION['loggedin']==true) {
    header("location:products1.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    require 'includes\nav_t.php';
    ?>
    <!-- Main banner image-->
    <div class="banner_image">
        <div class="inner-banner-image"></div>

        <center>
            <div class="banner_content">
                <h1>We sell lifestyle.</h1>
                <p>Flat 40% OFF on premium brands </p>
                <br />
                <button name="shop" class="btn btn-danger"><a href='login.php'>Shop now</a></button>
            </div>

        </center>


    </div>
    <br>
    <br>
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-4">
                <form action="cart_add.php" method="POST">
                    <div class="card">
                        <img src="img\5.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title"><a href='login.php'>Camera</a></h5>
                            <p>Choose among the best available in the world.</p>

                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <form action="cart_add.php" method="POST">
                    <div class="card">
                        <img src="img\10.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title"><a href='login.php'>Watches</a></h5>
                            <p>Choose the best watch which suits you.</p>


                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <form action="cart_add.php" method="POST">
                    <div class="card">
                        <img src="img\13.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title"><a href='login.php'>Shirts</a></h5>
                            <p>Our exquisite collection of shirts.</p>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
<?php
require 'includes\footer.php';
?>
</body>

</html>