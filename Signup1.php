<?php
$showalert = false;
$showerror = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'includes\_dbconnect.php';
    $name = $_POST["name"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists = false;
    /*$exitsql="SELECT * FROM 'users' WHERE email = '$email'";
 $result=mysqli_query($con,$exitsql);
 $numexits=mysqli_num_rows($result);
 if($numexits==1) {
     $showerror="username already exists";
 }
 else{
*/

    if (($password == $cpassword) && $exists == false) {
        $hash=password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `signup_info` ( `name`, `address`, `contact`, `email`, `password`) VALUES ( '$name', '$address', '$contact', '$email', '$hash')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $showalert = true;
        }
    } else if ($exists == true) {
        echo "already exist";
    } else {
        $showerror = "password do not match";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <?php require 'includes\nav_t.php';
    ?>
    <?php
    if ($showalert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is created you can login now!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
    }
    ?>
    <?php
    if ($showerror) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failure!</strong> ' . $showerror . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
    }
    ?>

    <div class="container">
        <form action='Signup1.php' method="POST">
            <h1>Signup to our website</h1>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp" required>

            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="number" name="contact" class="form-control" id="contact" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                <small id="emailHelp" class="form-text text-muted">Make sure to type same password.</small>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <?php
    require 'includes\footer.php';
    ?>
</body>

</html>