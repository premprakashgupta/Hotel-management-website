<?php
include"payment_process.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>thank you  | somato</title>
    <link rel="stylesheet" href="css/thank_you.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="justify-content-center d-flex ">
<!-- <div class="modal" id="myModal" role="dialog">-->

         <div class="card">
             <div class="text-right cross"> <i class="fa fa-times"></i> </div>
             <div class="card-body text-center"> <img src="https://img.icons8.com/bubbles/200/000000/trophy.png">
                 <h4>CONGRATULATIONS!</h4>
                 <p>You are doing successful payment <br> Enjoy your food</p>
                 <p><b>order id : </b> <?php echo $_SESSION['order_id'];?></p>
                 <p id="payId"></p>
                 <p><b>Total amount is : </b><?php echo $_SESSION['payable_amount'];?></p>
                 <p>thank you ........</p>
                 <button class="btn btn-danger" id="cw">close window</button>
             </div>
         </div>
<!--     </div>-->
<!-- </div>-->
</body>
</html>


<script src="javascript/payment_id.js">


</script>
<script>
        setTimeout(() => {
            window.location.href = 'http://localhost/somato/index.php'; //Will take you to Google.
        }, 5000);
</script>