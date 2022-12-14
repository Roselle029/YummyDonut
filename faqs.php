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
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
.box-container{
   width: 100%;
   background-color: white;
}

.box-container .box1{
   margin-bottom: -10px;
}

.box-container .box1 p{
   font-size: 20px;
   color:red;
}

.box-container .box1 p span{
   color:black;
}


.delete-btn{
   display: block;
   margin-top: 10px;
   border-radius: .5rem;
   cursor: pointer;
   width: 30%;
   font-size: 15px;
   color:black;
   padding:1.2rem 3rem;
   text-transform: capitalize;
   text-align: center;
   margin-bottom: 20px;
}

.btn{
   background-color: white;
}

.delete-btn{
   background-color:white;
}

   </style>


<body>
    
<?php include 'components/header.php'; ?>

<div class="box">
   <p class="heading">Frequently Asked Questions</p>
   <div class="faqs">
      <details>
         <summary>How to Order?</summary>
         <p class="text">You can place your order thru our website.<br></p>
      </details>
      
      <details>
         <summary>What are your modes of payment?</summary>
         <p class="text">We only accept COD for payments. But, we're working the online payment. Just hang on!</p>
      </details>
      <details>
         <summary>What is the delivery schedule?</summary>
         <p class="text">Delivery: Monday – Saturday, 9am until 9pm.</p>
      </details>
      <details>
         <summary>Do you have an actual store?</summary>
         <p class="text">Unfortunately No. But you can place your order here in our website</p>
      </details>
      <details>
      <details>
         <summary>How do you deliver your products?</summary>
         <p class="text">We use a combination of our inhouse riders and third-party logistics such as Lalamove, Grab and Mr. Speedy.</p>
      </details>
         <summary>How much is the delivery fee?</summary>
         <p class="text">Metro Manila: 80 pesos <br> Cavite/Laguna/Antipolo: 150 pesos</p>
      </details>
      <details>
         <summary>Do you accept bulk orders?</summary>
         <p class="text">Yes, we do! But, you need to contact us thru yummydonuts@gmail.com 3 days ahead</p>
      </details>
      
   </div>
</div>

<?php include 'components/footer.php'; ?>
</body>
</html>

<script type="text/javascript">
$(document).ready(function(){
   $('#submit').click(function(){
      var comments = $('#comments').val();

   });
});
   </script>