<?php
include 'Config.php';
/*if(!empty($_SESSION["id"])){
  header("Location: index.php");
}*/
if(isset($_POST["submit"])){
    $usernameemail = $_POST["Username"];
    $Password = $_POST["Password"];

    $req="SELECT count(*) FROM `signup` WHERE `Username` = '$usernameemail' AND `Password` = '$Password'";
    $result = mysqli_query($conn, $req);
    $res = mysqli_num_rows($result) > 0;

    if(!$res){
        echo "<script> alert('bad'); </script>";
    }else{
        session_start();
        
        
        header("Location: Acc/Acc.php");
    }

    echo
      "<script> alert('done'); </script>";
    
    header("Location: Acc/Acc.php");

    if($Password == $row['Password']){
        session_start();
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      echo
      "<script> alert('done'); </script>";
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
}else{
    echo
    "<script> alert('User Registered'); </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--icons link-->
    <script src="https://kit.fontawesome.com/14c8f9e7a2.js" crossorigin="anonymous"></script>
    <title>Sign in and Sign Up form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

<!--sign in form start freechor-->

            <form action="SignIn.php" method="POST" class="sign-in-form">
                <h2 class="title">Sign In</h2>
<!--Username-->      
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username/Email" name="Username">
                </div>
<!--Password-->
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password"  name="Password">
                </div>
<!--Sign in / Login button-->
                <input type="submit" class="btn solid" value="Login" name="submit">
                New here ? Go <a href="SignUp.php">Sign Up</a>
                <p class="social-text">Or sign in with social platforms</p>
                <div class="social-media">
                    <a href="https://www.facebook.com" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/?lang=en" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://accounts.google.com/signup/v2/webcreateaccount?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&dsh=S-418920727%3A1650365363568990&biz=false&flowName=GlifWebSignIn&flowEntry=SignUp" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="https://www.instagram.com/?hl=en" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </form>
            
<!--Sign in form end-->
            </div>
        </div>
    </div>
        <script src="login.js"></script>
  </body>
</html>
