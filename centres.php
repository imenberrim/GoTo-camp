<?php 
  include_once("connect.php");
$search = '';
if (isset($_GET) && $_GET && $_GET['search']){
    $search = $_GET['search'];
    $sql = "SELECT * FROM centers WHERE title LIKE '%" . $_GET['search'] . "%' or description LIKE '%" . $_GET['search'] . "%';";
}else {
    $sql = "SELECT * FROM centers";
}

  $result = $conn->query($sql);
  $conn->close();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <title>centres</title>

   <!-- swiper css link-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    
<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!--custom css file link-->
 <link rel="stylesheet" href="css/style.css">  

  </head>
  <body>

<!--header section starts -->
<section class="header">
  <a href="home.php" class="logo">GoTo Camp</a>
  <nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="centres.php">centres</a>
    <a href="login.php">login</a>
    <a href="sign.php">Sign In</a>
  </nav>

<div id="menu-btn" class="fas fa-bars"></div>
<form>
        <input type="text" name="search" id="search" placeholder="Search" value="<?= $search ?>">
        <input type="submit" value="Search"/>
    </form>

</section>

<!--header section ends -->


<div class="heading" style="background:url(img/header: bg -1.png) no-repeat">
<h1>our centres</h1>
</div>


<!-- home centres section starts -->

<section class="home-centres">
<h1 class="heading" > we propose  </h1>
  <div class="box-container">
  <?php 
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
  <div class="box">
 
    <div class="image">
    
      <img src="<?php echo $row["image"] ?>" alt="">

    </div>
   
<div class="content">
  
    <h3><?php echo $row["title"] ?></h3>
    <p><?php echo $row["description"] ?></p>
    <a href="login.php" class="btn">book now</a>
    
  </div>

  </div>
  <?php }
            } else {
                echo "0 results";
            }
        ?> 
  </div>
  </section>


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


  <!-- swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!--custom js file link -->
<script src="js/script.js"></script>

  </body>
</html>