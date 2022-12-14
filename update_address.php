<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

if(isset($_POST['submit'])){

   $address = $_POST['street'].', '.$_POST['region'].', '.$_POST['barangay'] .', '. $_POST['city'] .', '. $_POST['postalcode'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);

   $update_address = $conn->prepare("UPDATE `users` set address = ? WHERE id = ?");
   $update_address->execute([$address, $user_id]);

   $message[] = 'address saved!';

}

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

</head>
<body>

<?php include 'components/header.php'; ?>

<section class="form-container">

   <form action="" method="post">
      <h3>Address Information</h3>
      <input type="text" class="box" placeholder="Street Name/ No.: " required maxlength="50" name="street">
      <input type="text" class="box" placeholder="Region: " required maxlength="50" name="region">
      <input type="text" class="box" placeholder="City: " required maxlength="50" name="city">
      <input type="text" class="box" placeholder="Barangay" required maxlength="50" name="barangay">
      <input type="int" class="box" placeholder="Postal Code: " required name="postalcode">
      <input type="submit" value="save address" name="submit" class="btn">
   </form>

</section>

<?php include 'components/footer.php' ?>
<script src="js/script.js"></script>

</body>
</html>