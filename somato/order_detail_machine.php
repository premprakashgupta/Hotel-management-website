<?php
session_start();
include"db_con.php";


$order_id=$_SESSION['order_id'];
$query="select * from food_order where order_id=$order_id";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);

//for waiter total num

$waiterid_query="select * from waiter";
$waiterid_result=mysqli_query($con,$waiterid_query);
$waiter_num=mysqli_num_rows($waiterid_result);

$waiter_id=rand(1,$waiter_num);
$wquery="select * from waiter where id=$waiter_id && attendance='present'";
$wresult=mysqli_query($con,$wquery);
$wnum=mysqli_num_rows($wresult);

if($wnum!=0)
{
      $row=mysqli_fetch_array($wresult);
}
else{
    $waiter_id=rand(1,$waiter_num);
$wquery="select * from waiter where id=$waiter_id && attendance='present'";
$wresult=mysqli_query($con,$wquery);
}
 

    

    










?>