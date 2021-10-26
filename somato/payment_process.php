<?php
session_start();
include "db_con.php";
$order_id=$_SESSION['order_id'];
$waiter_name=$_SESSION['waiter_name'];
$payable_amount=$_SESSION['payable_amount'];
$datee=date('Y-m-d h:i:s');
if(isset($_SESSION['order_id']) && isset($_SESSION['payable_amount'])){
    
    $query="insert into payment_table (order_id,payment_status,amount,datee) values ('$order_id','$payable_amount','complete','$datee')";
$result=mysqli_query($con,$query);

mysqli_query($con,"update food_order set waiter_name='$waiter_name' where order_id='$order_id'");
}
?>