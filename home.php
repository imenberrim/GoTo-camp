<?php 
  include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css>

 <link rel="stylesheet" href="css/style.css">  

  </head>
  <body>

<!--header section starts -->
<section class="header">
  <a href="home.php" class="logo">GoTo Camp.</a>
  <nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="centres.php">centres</a>
    <a href="login.php">login</a>
    <a href="sign.php">Sign In</a>
  </nav>

<div id="menu-btn" class="fas fa-bars"></div>


</section>

<!--header section ends -->

<!-- home section starts -->
<section class="home">
  <div class="swiper home-slider">
    <div class="swiper-wrapper">

      <div class="swiper-slide slide" style="background: url(img/home1.jpg) no-repeat">
        <div class="content">
          <span>explore, discover, Connect with nature </span>
          <h3>Find yourself outside</h3>
          <a href="centres.php" class="btn">discover more</a>
        </div>
      </div>

      <div class="swiper-slide slide" style="background: url(img/home3.jpg) no-repeat">
        <div class="content">
          <span>explore, discover, Connect with nature </span>
          <h3>Camp out under the stars</h3>
          <a href="centres.php" class="btn">discover more</a>
        </div>
      </div>

      <div class="swiper-slide slide" style="background: url(img/home2.jpg) no-repeat;">
        <div class="content">
          <span>explore, discover, Connect with nature </span>
          <h3>Make your camping a relaxing experience</h3>
          <a href="centres.php" class="btn">discover more</a>
        </div>
      </div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

  </div>
</section>

<!-- home section ends -->


<!--services section starts-->

<section class="services">

<h1 class="heading-title">our Services</h1>
<div class="box-container">

  <div class="box">
    <img src="img/icon-1.png" alt="">
    <h3>adventure</h3>
  </div>

  <div class="box">
    <img src="img/icon-2.png" alt="">
    <h3>camp guide</h3>
  </div>

  <div class="box">
    <img src="img/icon-3.png" alt="">
    <h3>trekking</h3>
  </div>

 <div class="box">
    <img src="img/icon-4.png" alt="">
    <h3>off road</h3>
  </div>

  <div class="box">
    <img src="img/icon-5.png" alt="">
    <h3>materiel</h3>
  </div>

</div>
</section>

<!--services section ends-->


<!-- home about section starts -->

<section class="home-about">

<div class=image>
  <img src="img/about.jpg" alt="">
</div>
<div class="content">
<h3>About us</h3>
<p>Embark on a journey of outdoor exploration with GoTO Camp. Nestled at the intersection of adventure and serenity, we are your gateway to unforgettable camping experiences.</p>
<a href="about.php" class="btn">read more</a>

</div>


</section>

<!-- home about section ends -->

<!-- home centres section starts -->

<section class="home-centres">
<h1 class="heading" > our centres </h1>

<div class="box-container">
  <div class="box">
    <div class="image">
      <img src="img/centre-1.jpeg" alt="">
    </div>
<div class="content">
    <h3>Il Sogno camp</h3>
    <p>You can stay in wooden cabins in the heart of nature, set up in a camping area that respects nature and the environment.</p>
    <a href="book.php" class="btn">book now</a>
</div>
  </div>

  <div class="box">
    <div class="image">
      <img src="img/centre-2.jpg" alt="">
    </div>
<div class="content">
    <h3>Bouhertma Outdoors </h3>
    <p>They have a variety of equipment such as pergola, kayaks, volleyball and tennis courts, archery, children's playground, and other personalized activities</p>
    <a href="book.php" class="btn">book now</a>
</div>
  </div>


</div>



<div class="load-more"><a href="centres.php" class="btn">load more </a></div>

</section>

<!-- home centres section ends -->

<!--footer section starts-->

<section class="footer">

<div class="box-container">
  <div class="box">
    <h3>quick links</h3>
    <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
    <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
    <a href="centres.php"> <i class="fas fa-angle-right"></i>centres</a>
    <a href="blog.php"> <i class="fas fa-angle-right"></i>blog</a>
  </div>

  <div class="box">
    <h3>extra links</h3>
    <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
    <a href="#"> <i class="fas fa-angle-right"></i> about us</a>

    <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>

    <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
  </div>

  <div class="box">
    <h3>contact info</h3>
    <a href="#"> <i class="fas fa-phone"></i> +216 23151210</a>
    <a href="#"> <i class="fas fa-phone"></i> +216 73025012</a>
    <a href="#"> <i class="fas fa-envelope"></i> gotocamp@gmail.com</a>
    <a href="#"> <i class="fas fa-map"></i> tunis,Tunisia 5000</a>
  </div>

  <div class="box">
    <h3>follow us</h3>
    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
    <a href="#"> <i class="fab fa-twitter"></i>twiteer </a>
    <a href="#"> <i class="fab fa-instagram"></i> instagram" </a>
    <a href="#"> <i class="fab fa-youtube"></i> youtube" </a>
    
  </div>

</div>

<div class="credit">created by <span> Berrim Imen</span> | all rights reserved!</div>

</section>

<!--footer section ends-->



  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

  </body>
</html>