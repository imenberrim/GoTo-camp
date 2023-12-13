<?php
    if (isset($_POST) && $_POST){
        include_once("connect.php");
        
        $sql = "SELECT 'email','password' FROM 'login' WHERE 'email' = '" . $_POST['email']. "' and 'password' = '" . $_POST['password'] . "';";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) == 0){
            echo "User not found: Check your credentail";
        }else{
            $user = mysqli_fetch_assoc($result);

            session_start();
            // Set session variables
          
            $_SESSION["email"] = $user['email'];
            $_SESSION["password"] = $user['password'];
            header('Location: /GoTo-camp/home.php');
            die;
        }
        $conn->close();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <title>login</title>

   <!-- swiper css link-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    
<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!--custom css file link-->

<link rel="stylesheet" href="login-page-with-username-and-password\style.css">


  </head>
  <body>

<body class="align">

  <div class="grid">

    <form action="https://httpbin.org/post" method="POST" class="form login">

      <div class="form__field">
        <label for="login__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Username</span></label>
        <input id="email" type="text" name="email"  class="form__input" placeholder="email" required>
      </div>

      <div class="form__field">
        <label for="login__password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Password</span></label>
        <input id="password" type="password" name="password" class="form__input" placeholder="Password" required>
      </div>

      <div class="form__field">
      <a href="home.php">Sign In</a> 
      </div>

    </form>



</body>
</body>
</html>




 