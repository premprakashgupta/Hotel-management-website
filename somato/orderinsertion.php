<?php
session_start();
include"db_con.php";
$list_title=$_GET['list_title'];
$page_name=$_GET['page_name'];
if(!isset($_GET['quantity'])){
   header('location: http://localhost/somato/food_page.php?page_name='.$page_name.'&list_title='.$list_title);
    $_SESSION['msg']="You forgate to choose Quantity of food. please asure quantity first";
    $_SESSION['msg_error_success']="error";
}
else{
$food_name=$_GET['food_name'];
$price=$_GET['price'];
$quantity=$_GET['quantity'];
    
print_r($food_name);
echo "</br>";
print_r($price);
echo "</br>";
print_r($quantity);
echo "</br>";
$order_id=$_SESSION['order_id'];
print_r($order_id);
$query="insert into food_order (order_id,food_name,price,quantity) values ('$order_id','$food_name','$price','$quantity')";
$result=mysqli_query($con,$query);
if($result){
       header('location: http://localhost/somato/food_page.php?page_name='.$page_name.'&list_title='.$list_title);
    $_SESSION['msg_error_success']="success";
    $_SESSION['msg']="you have selected ".$food_name;
}
else{
    echo "Something went wrong";
}

}


?>