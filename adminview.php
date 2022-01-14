<?php
require 'includes\_dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LifeStyle</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminlogout.php">Logout</a>
                    </li>

                   
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <table class="table text-center table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Order Id</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Address</th>
                            <th scope="col">Paymode</th>
                            <th scope="col">Orders</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `order_manage`";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                   echo "<tr>  <td>" . $row['order_id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['contact'] . "</td>
                     <td>" . $row['address'] . "</td>
                     <td>" . $row['paymode'] . "</td>
                     <td>
                      <table class='table table-dark'>
                    <thead>
                        <tr>
                            <th scope='col'>Item Name</th>
                            <th scope='col'>Price</th>
                            <th scope='col'>Quantity</th>

                        </tr>
                    </thead>
                    <tbody>";

                    $order_query ="SELECT * FROM `user_order` WHERE `order_id` = '$row[order_id]'";
                    $order_result = mysqli_query($con, $order_query);
                    while ($row = mysqli_fetch_assoc($order_result)) 
                    {
                    echo "<tr> <td>" . $row['item_name'] . "</td>
                    <td>" . $row['item_price'] . "</td>
                     <td>" . $row['Quantity'] . "</td>
                     </tr>";

                    }

                    echo "
                    </tbody>
                    </table>
                    </td>
                    </tr>";

                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>