<?php
$server="localhost";
$username="root";
$password="";
$database="texttologin";


$conn =mysqli_connect($server,$username,$password,$database);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $showAlert=false;
    $showError=false;
    $username =$_POST["name"];
    $email=$_POST["email"];
    $password =$_POST["password"];
    $cpassword =$_POST["cpassword"];
    // $exists=false;

    //check wether this username exists
    $existSql="SELECT * FROM `users` WHERE name ='$username'";
    $result=mysqli_query($conn,$existSql);
    $numExistRows =mysqli_num_rows($result);


    if($numExistRows>0){
      // $exists= true;
      $showError=" Username already exists " ;

    }
    else{
      // $exists= false;
    

    if(($password==$cpassword)){
        $sql="INSERT INTO `users` ( `name`, `email`,`password`, `dt`) VALUES 
        ('$username', `$email`,'$password', current_timestamp());";

        $result =mysqli_query($conn,$sql);

        if($result){
            $showAlert=true;
        }
      }
        else{
            $showError="Passwords do not match " ;
        }
    
      }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  
  <body>
    <!--This is the header-->
    <div id="Header">
      <div><img src="img/logo.png" alt="" /></div>
      <div class="title">
        <h1>Ani Wears</h1>
      </div>

      <div class="nav-bar">
        <ul class="bar">
          <li><a class="active" href="index.php" target="_parent">Home</a></li>
          <li><a href="shop.html" target="_parent">Shop</a></li>
          <li><a href="about.html" target="_parent">About</a></li>
          <!-- <li><a href="http://localhost/college project 3/Ecommerce-website/" target="_parent">Contact</a></li> -->
          <!-- <li><a href="http://localhost/Expn Management/Expn-management/" target="_parent">Contact</a></li> -->
          <li><a href="contact.php" target="_parent">Contact</a></li>
          <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
          <li>
            <button id="user"><i class="fa-regular fa-circle-user"></i></button>
          </li>
        </ul>
      </div>

      <!--This is the mobile div -->
      <div id="mobile">
        <i id="mobile-bar" class="fas fa-outdent"></i>
      </div>
    </div>
    <!--This is the ending of header-->

    <!-- This is the form of log in -->
    <div class="form-container">
      <div class="cross">
        <button id="cross">x</button>
      </div>
      <h2>Log in</h2>

      <form action="">
        <div class="form-element">
          <label for="email">Email</label>
          <input
            type="email"
            id="logemail"
            name="email"
            placeholder="Enter your email"
          />
        </div>

        <div class="form-element">
          <label for="password">password</label>
          <input
            type="password"
            id="logpassword"
            name="password"
            placeholder="Password"
          />
        </div>

        <div class="form-element">
          <input type="checkbox" id="checkbox" />
          <label for="checkbox">remember-me</label>
        </div>
        <button class="log-button">Login</button>
        <div class="link">
          <a href="#">Forgot password?</a>
        </div>
      </form>

      <div class="signUpLink">
        <span>Don't have an account?</span><button id="signup">Sign up</button>
      </div>
    </div>

    <!-- This is the form of sign up -->
    <div class="form-container2">
      <div class="cross">
        <button id="cross2">x</button>
      </div>
      <h2>Sign up</h2>

      <form  action="index.php" method="post">
        <div class="form-element">
          <label for="name">Enter your name</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Enter your name"
          />
        </div>

        <div class="form-element">
          <label for="email">Email</label>
          <input
            type="email"
            id="signemail"
            name="email"
            placeholder="Enter your email"
          />
        </div>

        <div class="form-element">
          <label for="password">password</label>
          <input
            type="password"
            id="signpassword"
            name="password"
            placeholder="Password"
          />
        </div>

        <div class="form-element">
          <label for="cpassword">Confirm password</label>
          <input
            type="password"
            id="signcpassword"
            name="cpassword"
            placeholder="Confirm password"
          />
        </div>

        <button class="log-button">Signup</button>
        <div class="link">
          <a href="#">Forgot password?</a>
        </div>

        <?php
      if($showAlert){
        echo 'Your account is created';
      }

      if($showError){
        echo'Error'. $showError;
      }
      ?>
      </form>

      <div class="logInLink">
        <span>Have an account?</span><button id="login">Log in</button>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
