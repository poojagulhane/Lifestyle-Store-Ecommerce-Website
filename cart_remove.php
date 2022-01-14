<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="GET") {
    if(isset($_GET['remove_item'])){
        foreach($_SESSION['cart'] as $key =>$value) {
            if($value['item_price']==$_GET['item_price']){
            unset($_SESSION['cart'][$key]);
                echo "<script>
             alert('items Removed');
             window.location.href='cart.php';
             exit;
             </script>";
            }
        }
}
else{
    echo "sorry";
}
}
?>