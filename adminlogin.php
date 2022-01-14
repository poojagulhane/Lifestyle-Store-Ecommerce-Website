<?php
session_start();
$adminlogin = false;
$showerror = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'includes\_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM `admin_login` WHERE `username` = '$username' AND `password` = '$password' ";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num) {
        $adminlogin = true;
        session_start();
        $_SESSION['logged'] = true;
        $_SESSION['username'] = $username;
        header("location:adminview.php");
    } else {
        $showerror = "Invalid Login credintial";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lifecare</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style1.css">
    <!-- Latest compiled and minified CSS -->




    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php require 'includes\nav_t.php';
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
    <div class="container my-5">
        <div class="center">
            <h1>Admin Login</h1>
            <form method="POST">
                <div class="txt">
                    <!-- comment -->
                    <input type="text" name="username" required><!-- comment -->
                    <span></span>
                    <label>Username</label>
                </div>

                <div class="txt">
                    <input type="password" name="password" required><!-- comment -->
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="pass"><a href="#">Forget Password?</a></div>
                <input type="submit" name="Login" value="Login">
                <div class="pass1"><a href="#">Create Account</a></div>

            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




</body>