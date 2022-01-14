<?php 

session_start();
include 'includes\_dbconnect.php';
$name=$_POST['name'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$pay=$_POST['paymode'];


if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_POST['purchase'])) {
    $sql= "INSERT INTO `order_manage` ( `name`, `address`, `contact`, `paymode`) VALUES ('$name', '$address', '$contact', 'COD')";
    if(mysqli_query($con,$sql)){
      $order_id=mysqli_insert_id($con);
      $sql1= "INSERT INTO `user_order` (`order_id`, `item_name`, `item_price`, `Quantity`) VALUES (?,?,?,?)";
      $stmt=mysqli_prepare($con,$sql1);
      if($stmt) {
        mysqli_stmt_bind_param($stmt,"isii",$order_id,$item_name,$item_price,$Quantity);
        foreach ($_SESSION['cart'] as $key => $value) {
          $item_name=$value['item_name'];
          $item_price=$value['item_price'];
          $Quantity=$value['Quantity'];
          mysqli_stmt_execute($stmt);

        }

        unset($_SESSION['cart']);
        echo "<script>
             alert('Order Placed');
             window.location.href='success.php';
             exit;
             </script>";
        
      
      
    }
    else{
        echo "<script>
             alert('Sql  error');
             window.location.href='products1.php';
             exit;
             </script>";
    }
     
    
   }
  }
}

?>

