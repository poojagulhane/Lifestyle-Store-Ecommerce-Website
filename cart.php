<?php
session_start();
include 'includes\_nav3.php';
?>
<?php

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>MY CART</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sno</th>
                            <th scope="col">item_name</th>
                            <th scope="col">item_price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           $total = 0;
                        if (isset($_SESSION['cart'])) {
                            $sno = 0;
                           
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sno = $sno + 1;
                                $total += $value['item_price'];
                                echo "
                        <tr>
                        <td>$sno</td>
                        <td>$value[item_name]</td>
                        <td>$value[item_price]</td>
                        <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'</td>
                        <form action='cart_remove.php'>
                        <td><button name='remove_item' class='btn btn-primary'>Remove</button></td>
                        <input type='hidden' name='item_price' value='$value[item_price]'>
                        </form>
                    </tr>";
                            }
                        }
                        ?>

                    </tbody>

                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right-right"><?php echo $total; ?></h5>
                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    ?>
                        <form action="purchase.php" method="POST">
                            <div class=" form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">

                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="number" class="form-control" id="contact" name="contact" required>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymode" id="paymode" value="COD">
                                <label class="form-check-label" for="defaultCheck1">
                                    Cash on Delivery
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymode" id="paymode" value="Debit">
                                <label class="form-check-label" for="defaultCheck1">
                                    Debit
                                </label>
                            </div>
                            <button name="purchase" class="btn btn-primary btn-block">Make Purchase</button>
                        </form>
                    <?php
                    }
                    ?>
                </div>


            </div>

        </div>




        <?php
        require 'includes\footer.php';
        ?>
</body>

</html>