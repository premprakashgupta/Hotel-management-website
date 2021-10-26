<?php
include"order_detail_machine.php";
$page_name=$_GET['page_name'];
$page_title=$_GET['list_title'];
if($num>0)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="prem">
<!--<meta http-equiv="refresh" content="30">-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?> | somato </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/order_detail.css">
    <link rel="stylesheet" href="../fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<!--    <link rel="shortcut icon" href="image/facebook.png" />-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
  <span id="order_id"><b>Order id : </b><?php echo $_SESSION['order_id'];?></span>
   <div class="container">
      <div class="row">
                 <div class="upper_section col-sm-12 col-md-12 col-lg-12">
       <div class="row">
                 <?php
                        foreach($wresult as $wrow){
                ?>
        <div class="waiter_pic col-sm-12 col-md-6 col-lg-6">
            <img src="image/<?php echo $wrow['waiter_pic'];?>" alt="">
        </div>
        <div class="waiter_detail col-sm-12 col-md-6 col-lg-6">
            <ul>
                <li><span>Name :</span> <span><?php echo $wrow['waiter_name']; $_SESSION['waiter_name']=$wrow['waiter_name'];?></span> </li>
                <li><span>Experience : </span> <span><?php echo $wrow['experience'];?></span></li>
                <li><span>Employee ID : </span> <span><?php echo $wrow['waiter_id'];?></span></li>
                <li><span>Trust : </span> <span class="approved"></span></li>
                
            </ul>
        </div>
        <?php
                        }
                ?>
       </div>
 
    </div>
    <div class="lower_section col-sm-12 col-md-12 col-lg-12">
           <table class="table">
            <tr> <th>Food Name</th> <th>Rate</th> <th>Quantity</th> </tr>
            <?php
            $sum=0;
            $summation=0;
            for($i=0;$i<$num;$i++)
            {
                $row=mysqli_fetch_array($result);
                 $summation=$row['quantity'] * $row['price'];
            $sum=$sum+$summation;
            ?>
            <tr> <td><?php echo $row['food_name'];?></td> <td><?php echo $row['price'];?></td> <td><?php echo $row['quantity'];?></td> </tr>
            
            <?php
            }
            ?>
            <tr><td>Total: </td><td><?php echo $sum;  $_SESSION['payable_amount']=$sum;?></td></tr>
        </table>
       </div>
        

      </div>

    
       <button class="btn btn-primary p-3 my-2 font-weight-bold  float-right" id="rzp-button1">Pay ₹ <span id="amount"><?php echo $sum; ?></span></button>
   </div>
    
</body>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="javascript/payment.js"></script>
</html>


<?php
}
else
{
    header('location: http://localhost/somato/food_page.php?page_name='.$page_name.'&list_title='.$page_title);
    $_SESSION['msg_error_success']="error";
    $_SESSION['msg']="You have not ordered anything, Hurry up..........";
}
?>