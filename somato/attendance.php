<?php
session_start();
include"db_con.php";
$waiter_name=$_SESSION['waiter_name'];
$password=$_SESSION['password'];
extract($_POST);
    if(isset($_POST['present']))
    {
        mysqli_query($con,"update waiter set attendance='present' where waiter_name='$waiter_name' && password='$password'");
    }
 if(isset($_POST['absent']))
    {
        mysqli_query($con,"update waiter set attendance='absent' where waiter_name='$waiter_name'&& password='$password'");
    }
        $wresult=mysqli_query($con,"select * from waiter where waiter_name='$waiter_name' && password='$password'");
        $row=mysqli_fetch_array($wresult);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>thank you  | somato</title>
    <link rel="stylesheet" href="css/thank_you.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="justify-content-center d-flex ">
<!-- <div class="modal" id="myModal" role="dialog">-->

         <div class="card">
             <div class="text-right cross"> <i class="fa fa-times"></i> </div>
             <div class="card-body text-center"> <img src="image/<?php echo $row['waiter_pic'];?>" class="img-fluid">
                 <h4><?php echo $_SESSION['waiter_name'];?></h4>
                 <form action="" method="post">
                 <div class="row">
                     <div class="col"><input type="submit" name="present" class="btn btn-primary" value="check in"></div>
                     
                     <div class="col">
                         <div class="col"><input type="submit" name="absent" class="btn btn-danger" value="check out"></div>
                     </div>
                 </div>
                 </form>
                 <div class="login_out"> <a href="logout.php" class="btn btn-success" id="signout">Staff sign out</a> </div>
             </div>
         </div>
<!--     </div>-->
<!-- </div>-->
</body>
</html>
