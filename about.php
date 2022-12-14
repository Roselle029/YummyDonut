<?php
include 'components/connect.php';
session_start();
if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy D🍩nuts</title>
    <link rel="shortcut icon" href="images/logo.ico.jpg" type="image/x-icon">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/header.php'; ?>
	<div id="top-header">
		
	   <div id="header-image-menu">
		   <center><img src="images/about1.JPG" style="width: 70%; height: 70%;"></center>
	   </div>
   </div>

   


<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/production.jpg" alt="">
      </div>

      <div class="content">
         <h3>WHO WE ARE </h3>
         <p><i>Yummy Donuts are established in year 2022. The pandemic cause a lot of people to work extra because a lot of companies are downsizing. That's why the students of Taguig City University came with the idea of selling donuts not only to their classmates but with people around Metro Manila. </i></p>
      </div>
   </div>
</section>

<div id="top-header">
		
	   <div id="header-image-menu">
		   <center><img src="images/founder.png" style="width: 70%; height: 70%; margin-top: 100px; margin-bottom: 100px;"></center>
	   </div>
   </div>



<section class="reviews">
   <h1 class="title" style="margin-top: 50px; margin-bottom: 50px;">Customer's Review</h1>
   <div class="swiper reviews-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide">
            <img src="images/nopic.jpg" alt="">
            <p>"Yummy Donuts. A complete paradigm shift when you think about donuts. You can enjoy without feeling so much guilty about the sweetness. It is just so flavorfully sweet and yet light to eat. A really pleasant surprise. It is hard to say which is my favorite since each donut flavor that I taste becomes a favorite. Check it out and experience it yourself."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Customer</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/carla.jpg" alt="">
            <p>"Best tasting doughnut I had. Texture is soft, creamy and not too sweet, you can definitely taste the berries. Can’t wait to try all the flavors! I love Berry Glazed."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ms. Carla Sy</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/nopic.jpg" alt="">
            <p>" Recently they launched a new doughnut variety, Maple Bacon. It combines tasty flavors of bacon and maple. As soon as I got my hands on a box, I immediately finished one. I liked that it had a balance of savory and sweetness in one bite. Its salty ingredients tamed the usual sweetness from Yummy doughnuts. Expect sweet, super soft dough and a bit of crunch from the bacon bits.  "</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Customer</h3>
         </div>
      </div>
      <div class="swiper-pagination"></div>
   </div>
</section>


<?php include 'components/footer.php'; ?>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>