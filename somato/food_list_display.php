<?php
include"db_con.php";
$page_name = $_GET['page_name'];
$page_title = $_GET['list_title'];
$query = "select * from food_menu where category='$page_name'";
$result = mysqli_query( $con, $query );

$num = mysqli_num_rows( $result );
//print_r( $num );
//print_r( $result );

?>