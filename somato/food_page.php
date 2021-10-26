<?php
session_start();
include"food_list_display.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="prem">
    <!--<meta http-equiv = "refresh" content = "30">-->

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title><?php echo $page_title;
?> | somato </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/food_page.css">
    <link rel="stylesheet" href="../fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!--    <link rel = "shortcut icon" href = "image/facebook.png" />-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="menu">
        <ul>
            <li><a href="food_page.php?page_name=indian_food_list&list_title=indian food">Indian Food</a><span><img src="image/indian_food.jpg" alt=""></span></li>
            <li><a href="food_page.php?page_name=south_indian_food_list&list_title=south indian food">South Indian Food</a><span><img src="image/South%20Indian%20Food_1.jpg" alt=""></span></li>
            <li><a href="food_page.php?page_name=biryani&list_title=biryani">Biryani</a><span><img src="image/biryani.jpg" alt=""></span></li>
        </ul>
    </div>

    <div class="<?php echo $_SESSION['msg_error_success'];?>" id="msg"><?php echo $_SESSION['msg'];
?></div>
    <div class="food_list">
        <form action="orderinsertion.php" method="post" onsubmit="return validation()">
            <div class="food_list_box">
                <div class="Indian_food_list fl">
                    <ul>
                        <li>
                            <h2><?php echo $page_title;
?></h2>
                        </li>
                        <li><span>Food Name</span> <span>Half rate ( INR )</span>
                            <span>Full rate ( INR )</span> <span>Quantity</span>
                        </li>
                        <?php
for ( $i = 0; $i<$num; $i++ ) {
    $rows = mysqli_fetch_array( $result );
    ?>
                        <li>
                            <span><?php echo $rows['food_name'];
    ?></span> <span><?php echo $rows['half_rate'];
    ?> <a href="orderinsertion.php?food_name=<?php echo $rows['food_name'];?>& price=<?php echo $rows['half_rate'];?>&list_title=<?php echo $page_title; ?>&page_name=<?php echo $page_name; ?>&1234" id="anchorH<?php echo $i+1;?>">Add</a> </span>

                            <span><?php echo $rows['full_rate'];
    ?><a href="orderinsertion.php?food_name=<?php echo $rows['food_name'];?> & price=<?php echo $rows['full_rate'];?>&list_title=<?php echo $page_title; ?>&page_name=<?php echo $page_name; ?>&1234" id="anchorF<?php echo $i+1;?>">Add</a></span> <span>

                                <input type="number" value="0" min="1" max="5" id="quantity<?php echo $i+1;?>" onchange="getLink('quantity<?php echo $i+1;?>','anchorH<?php echo $i+1;?>','anchorF<?php echo $i+1;?>')"></span>

                        </li>
                        <?php
}
?>
                    </ul>
                </div>
            </div>

        </form>

    </div>
    
    <a href="order_detail.php?page_name=<?php echo $page_name;?>&list_title=<?php echo $page_title; ?>" id="ordernow">Order Now <div id="spinner" role="status">

        </div> </a>
</body>
<script src="javascript/indexjs.js"></script>
<script src="javascript/spinner.js"></script>

</html>