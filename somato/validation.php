<?php
session_start();
include"db_con.php";
$waiter_id=rand(1000,9999);
extract($_POST);
$query="select * from waiter where waiter_name='$waiter_name' && password='$password'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
echo $num;

if($num<1)
{
    
    $insert_query="insert into waiter (waiter_name,waiter_id,password) values ('$waiter_name','$waiter_id','$password')";
    $insert_result=mysqli_query($con,$insert_query);
    $_SESSION['waiter_name']=$waiter_name;
    $_SESSION['password']=$password;
    header('location: http://localhost/somato/attendance.php');
}
else{

    $_SESSION['waiter_name']=$waiter_name;
    $_SESSION['password']=$password;
    header('location: http://localhost/somato/attendance.php');
}



?>