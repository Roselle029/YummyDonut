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

<?php
if(isset($_POST['submit'])){
   $comment = $_POST['comment'];
   $comment = filter_var($comment, FILTER_SANITIZE_STRING);
   $comment1 = $_POST['comment1'];
   $comment1 = filter_var($comment1, FILTER_SANITIZE_STRING);
   $comment2 = $_POST['comment2'];
   $comment2 = filter_var($comment2, FILTER_SANITIZE_STRING);
   $comment3 = $_POST['comment3'];
   $comment3 = filter_var($comment3, FILTER_SANITIZE_STRING);
   $comment4 = $_POST['comment4'];
   $comment4 = filter_var($comment4, FILTER_SANITIZE_STRING);
   $comment5 = $_POST['comment5'];
   $comment5 = filter_var($comment5, FILTER_SANITIZE_STRING);
   $comment6 = $_POST['comment6'];
   $comment6 = filter_var($comment6, FILTER_SANITIZE_STRING);

   $select_comment = $conn->prepare("SELECT * FROM `comments` WHERE comment = ?,  comment1 = ?,  comment2 = ?,  comment3 = ?,  comment4 = ?,  comment5 = ?,  comment6 = ?");
   $select_comment->execute([$comment]);

   if($select_comment->rowCount() > 0){
      $comment[] = 'already sent message!';
   }else{
      $insert_comment = $conn->prepare("INSERT INTO `comments`(comment,comment1,comment2,comment3,comment4,comment5,comment6,) VALUES(?,?,?,?,?,?,?)");
      $insert_comment->execute([$comment]);
      $comment[] = 'sent message successfully!';

   }

}  

?>