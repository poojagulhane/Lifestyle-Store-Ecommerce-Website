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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Product</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>


    <?php
    require 'includes\_nav3.php';
    ?>
    <div class="container my-4">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default panel-primary">
                    <div class="panel-body back">
                        <center>

                            <h1 class="life">Welcome to our lifestyle store!</h1>
                            <p>We have best cameras,watches and shirts for you,No need to hunt around,we have all in one place</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row">
            <div class="col-lg-3">
                <form action="cart_add.php" method="POST">
                    <div class="card">
                        <img src="img\5.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Nikon Eos</h5>
                            <p class="card-text">Price :Rs.450</p>
                            <button text="submit" name="cart_add" class="btn btn-primary">Add to Cart</button>
                            <input type="hidden" name="item_name" value="Nikon Eos">
                            <input type="hidden" name="item_price" value="450">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="cart_add.php" method="POST">
                    <div class="card">
                        <img src="img\3.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sony DSLR</h5>
                            <p class="card-text">Price :Rs.950</p>
                            <button text="submit" name="cart_add" class="btn btn-primary">Add to Cart</button>
                            <input type="hidden" name="item_name" value="Sony DSLR">
                            <input type="hidden" name="item_price" value="950">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="cart_add.php" method="POST">
                    <div class="card">
                        <img src="img\1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Olympus DSLR</h5>
                            <p class="card-text">Price :Rs.350</p>
                            <button text="submit" name="cart_add" class="btn btn-primary">Add to Cart</button>
                            <input type="hidden" name="item_name" value="Olympus DSLR">
                            <input type="hidden" name="item_price" value="350">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="cart_add.php" method="POST">
                    <div class="card">
                        <img src="img\2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Canon Eos</h5>
                            <p class="card-text">Price :Rs.1200</p>
                            <button text="submit" name="cart_add" class="btn btn-primary">Add to Cart</button>
                            <input type="hidden" name="item_name" value="Canon Eos">
                            <input type="hidden" name="item_price" value="1200">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <form action="cart_add.php" method="POST">
                    <div class="card">
                        <img src="img\9.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Titan Model #301</h5>
                            <p class="card-text">Price :Rs.1350</p>
                            <button text="submit" name="cart_add" class="btn btn-primary">Add to Cart</button>
                            <input type="hidden" name="item_name" value="Titan Model #301">
                            <input type="hidden" name="item_price" value="1350">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="cart_add.php" method="POST">
                    <div class="card">
                        <img src="img\10.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Titan Model #201</h5>
                            <p class="card-text">Price :Rs.900</p>
                            <button text="submit" name="cart_add" class="btn btn-primary">Add to Cart</button>
                            <input type="hidden" name="item_name" value="Titan Model #201">
                            <input type="hidden" name="item_price" value="950">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="cart_add.php" method="POST">
                    <div class="card">
                        <img src="img\11.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">HMT Milan</h5>
                            <p class="card-text">Price :Rs.1250</p>
                            <button text="submit" name="cart_add" class="btn btn-primary">Add to Cart</button>
                            <input type="hidden" name="item_name" value="HMT Milan">
                            <input type="hidden" name="item_price" value="1250">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="cart_add.php" method="POST">
                    <div class="card">
                        <img src="img\7.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">John Zok</h5>
                            <p class="card-text">Price :Rs.1850</p>
                            <button text="submit" name="cart_add" class="btn btn-primary">Add to Cart</button>
                            <input type="hidden" name="item_name" value="John Zok">
                            <input type="hidden" name="item_price" value="1850">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <form action="cart_add.php" method="POST">
                        <div class="card">
                            <img src="img\14.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Luis Phil</h5>
                                <p class="card-text">Price :Rs.1150</p>
                                <button text="submit" name="cart_add" class="btn btn-primary">Add to Cart</button>
                                <input type="hidden" name="item_name" value="Luis Phil">
                                <input type="hidden" name="item_price" value="1150">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3">
                    <form action="cart_add.php" method="POST">
                        <div class="card">
                            <img src="img\6.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Jhalsani</h5>
                                <p class="card-text">Price :Rs.900</p>
                                <button text="submit" name="cart_add" class="btn btn-primary">Add to Cart</button>
                                <input type="hidden" name="item_name" value="Jhalsani">
                                <input type="hidden" name="item_price" value="2000">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3">
                    <form action="cart_add.php" method="POST">
                        <div class="card">
                            <img src="img\8.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">H&W</h5>
                                <p class="card-text">Price :Rs.3000</p>
                                <button text="submit" name="cart_add" class="btn btn-primary">Add to Cart</button>
                                <input type="hidden" name="item_name" value="H&W<">
                                <input type="hidden" name="item_price" value="3000">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3">
                    <form action="cart_add.php" method="POST">
                        <div class="card">
                            <img src="img\13.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">John Zok</h5>
                                <p class="card-text">Price :Rs.1850</p>
                                <button text="submit" name="cart_add" class="btn btn-primary">Add to Cart</button>
                                <input type="hidden" name="item_name" value="John Zok">
                                <input type="hidden" name="item_price" value="1850">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    </div>
    </div>


   <?php
   require 'includes\footer.php';
   ?>
</body>

</html>