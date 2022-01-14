<?php 

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['cart_add'])) {
        if(isset($_SESSION['cart'])) {
         $myitems=array_column($_SESSION['cart'],'item_name');
         if(in_array($_POST['item_name'],$myitems)) {
             echo"<script>
             alert('items already added');
             window.location.href='products1.php';
             exit;
             </script>";
         }
         else{

         
                   $count= count($_SESSION['cart']);
          $_SESSION['cart'][$count]= array('item_name' => $_POST['item_name'],'item_price' => $_POST['item_price'],'Quantity' =>1);
            echo "<script>
             alert('items  added');
             window.location.href='products1.php';
             </script>";
        }
    }
        else{
            $_SESSION['cart'][0] = array('item_name' => $_POST['item_name'], 'item_price' => $_POST['item_price'], 'Quantity' => 1);
            print_r($_SESSION['cart']);
            echo "\n";
            echo "<script>
             alert('items  added');
             window.location.href='products1.php';
             </script>";
        }
    }
}
