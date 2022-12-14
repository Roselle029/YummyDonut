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
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy D🍩nuts</title>
    <link rel="shortcut icon" href="images/logo.ico.jpg" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <style>

.products .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 33rem);
   gap:1.5rem;
   justify-content: center;
   align-items: flex-start;
}

.products .box-container .box{
   background-color: var(--white);
   border-radius: .5rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   padding:1.5rem;
}

.products .box-container .box img{
   width: 100%;
   height: 100%;
   object-fit: contain;
   margin-bottom: 1rem;
}

.products .box-container .box .name{
   font-size: 2rem;
   color:var(--black);
   padding:1rem 0;
}

.products .box-container .box .flex{
   display: flex;
   align-items: center;
   gap:1rem;
   justify-content: space-between;
}

.products .box-container .box .flex .category{
   font-size: 1.8rem;
   color:var(--main-color);
}

.products .box-container .box .flex .price{
   font-size: 2rem;
   color:var(--black);
   margin:.5rem 0;
}

.products .box-container .box .flex .price span{
   font-size: 1.5rem;
}
      </style>

</head>
<body>

<?php include 'components/header.php'; ?>

<header>
<div id="top-header">
		
	   <div id="header-image-menu">
		   <center><img src="images/menu.JPG" style="width: 70%; height: 70%;"></center>
	   </div>
   </div>
</header>

<section class="products">

   <div class="box-container">

      <?php
         $select_products = $conn->prepare("SELECT * FROM `products`");
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
      ?>
      <form action="" method="post" class="box">
         <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
         <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
         <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
         <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
         <div class="name"><?= $fetch_products['name']; ?></div>
         <div class="flex">
            <div class="price"><span>₱</span><?= $fetch_products['price']; ?></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2"">
         </div>
      </form>
      <?php
            }
         }else{
            echo '<p class="empty">no products added yet!</p>';
         }
      ?>
   </div>

</section>
<?php include 'components/footer.php'; ?>
<script src="js/script.js"></script>

</body>
</html>