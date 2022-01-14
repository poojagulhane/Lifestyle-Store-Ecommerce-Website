<?php
session_start();
$login = false;
$showerror = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require 'includes\_dbconnect.php';
  $email = $_POST["email"];
  $password = $_POST["password"];
  $sql = "SELECT * FROM signup_info WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
      while ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['email'] = $email;
          header("location:products1.php");
        } else {
          $showerror = "Invalid login credintials";
        }
      }
    } else {
      $showerror = "Invalid login credintials";
    }
  }


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Systeam</title>
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
  <div class="container mt-5">
    <h1>Login to Our website</h1><br>
    <form action="login.php" method="POST">
      <div class=" form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">

      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>

    </form>
  </div>

  <?php
  require 'includes\footer.php';
  ?>
</body>

</html>