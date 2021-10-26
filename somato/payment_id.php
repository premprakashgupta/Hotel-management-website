<?php
session_start();
include"db_con.php";
extract($_POST);

if(isset($_SESSION['order_id']) && isset($payment_id))
{
    echo $payment_id;
    echo $_SESSION['order_id'];
$order_id=$_SESSION['order_id'];
// $order_id=888179;
$query = "update payment_table set payment_id='$payment_id' where order_id='$order_id'";
$result = mysqli_query( $con, $query );
if($result)
echo "ss";
else
echo "ff";
}

?>