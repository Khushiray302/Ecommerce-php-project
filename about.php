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
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="./img/1.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>FROM THE BEGINNING, OUR MISSION HAS BEEN FINE JEWELRY FOR EVERY DAY, FOR OUR DAMN SELVES</p>
         <p>People can get any product as they like.Now you don't have to go out to buy ornaments. Try this product yourself.You can get varieties of jwellery items in our online store. And get the awesome Result.Find the perfect gift for the moms in your life.We believe in jewelry as an expression of self: that it can mean whatever you want; that you can wear it when you want, buy it when you want, gift it, celebrate with it, reward yourself with it and keep it forever...</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>










<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>