<?php
session_start();

$random_id=rand(100000,999999);
$_SESSION["order_id"]=$random_id;
$_SESSION['msg_error_success']="";
$_SESSION['msg']="";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="prem">
    <!--<meta http-equiv="refresh" content="30">-->

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title>Somato | Order place quickly </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/indexstyle.css">
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
    <div class="container-fluid">
        <header>
            <nav>
                <navbar>
                    <div class="logo">Somato</div>
                    <div class="menu">
                        <ul>
                            <li><a href="food_page.php?page_name=indian_food_list&list_title=INDIAN FOOD" id="indianfood_a">Indian Food</a></li>
                            <li><a href="food_page.php?page_name=south_indian_food_list&list_title=SOUTH INDIAN FOOD" id="southindianfood_a">South Indian Food</a></li>
                            <li><a href="#" id="japaniesfood_a">Japanies Food</a></li>
                            <li><a href="#" id="fastfood_a">Fast Food</a></li>
                            <li><a href="#" id="chiniesfood_a">Chinies Food</a></li>
                        </ul>
                    </div>
                    <div class="login_out"> <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#myModal" id="signup">Staff sign up</a> </div>
                    
                </navbar>
            </nav>
        </header>
        <section>

            <div class="heading_tag">
                <div class="heading_tag_box">
                    <span> Quick oreder palce</span>
                    <h1>King of taste</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta assumenda mollitia, ipsam excepturi facere. Porro qui commodi aspernatur iusto minus accusamus pariatur nulla, cupiditate iste eius dolorem soluta, natus voluptatem.</p>
                </div>

            </div>
            <div class="famous_dish">
                <div class="famous_dish_box">
                    <span class="food_name_tag" id="food_name_tag">chawming</span>
                    <img src="image/chawming-removebg-preview.png" alt="" id="slide_img">
                    <span class="food_name_price" id="food_name_price">70 INR</span>
                </div>
            </div>
        </section>
    </div>
    
<!--    login box---------------------------------->

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Sign Up/Sign In</h4>
        <button type="button" class="close bd-danger" data-dismiss="modal">&times;</button>
      </div>
      <form action="validation.php" method="post">
      <div class="modal-body">
        <div class="form-group">
           <label for="waiter_name">Username</label>
            <input type="text" name="waiter_name"  id="waiter_name" class="form-control">
        </div>
        <div class="form-group">
           <label for="password">Password</label>
            <input type="password" name="password"  id="password" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="submit" id="submit">
      </div>
        </form>
    </div>

  </div>
</div>



<!--login box end------------------------------------->

</body>

<script src="javascript/indexjs.js"></script>
<script src="javascript/signup.js"></script>
</html>