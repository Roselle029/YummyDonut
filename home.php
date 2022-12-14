<?php
include 'components/connect.php';
session_start();
if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};
include 'components/add_cart.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy D🍩nuts</title>
    <link rel="shortcut icon" href="images/logo.ico.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
<?php include 'components/header.php'; ?>
    <section id="Home">

        <div class="main">

            <div class="men_text">
                <center><h1>Grab your <span> <br>Yummy D🍩nuts</span> <br>now!</h1></center>
            </div>

            <div class="main_image">
                <img src="images/2.jpg" style="margin-left: 40px; width: 650px; height: 500px;">
            </div>
        </div>

        <div class="main_btn">
            <a href="product.php">Order Now</a>
            <i class="fa-solid fa-angle-right"></i>
        </div>

    </section>

    <!--About-->

    <div class="about" id="About">
        <div class="about_main">

            <div class="image">
                <img src="images/donut.jpg" style="margin-right: 40px; width: 650px; height: 500px;" >
            </div>

            <div class="about_text">
                <h1>Why choose<br><span>Yummy D🍩nuts?</span></h1>
                <p>
Yummy D🍩nuts are handmade Donuts that are unique because they are made the old-fashioned way, but finished with a modern flair. Each donut is hand rolled and hand cut, then fried in small batches throughout the morning so every batch is fresh made.
Every delectable batch is made from scratch using high quality, real ingredients—we never use mixes or synthetic ingredients. Our glazes, fillings, custards, cookies, and toppings are always handmade by our pastry chefs. </p>
            </div>
        </div>

    </div>

      <section id="Home">
      <div class="main">

            <div class="men_text">
                <center><h1>Best Seller <span> <br>D🍩nuts</span></h1></center>
            </div>

            <div class="main_image">
            <a href="product.php"><img src="images/best seller.png" style="margin-left: 40px; width: 650px; height: 500px;"> </a>
            </div>
        </div>
</section>
      
    
    <?php include 'components/footer.php'; ?>

    
<script src="js/script.js"></script>
</body>
</html>