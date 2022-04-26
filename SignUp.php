<?php 

include 'Config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['Username'])) {
    header("Location: page.php");
}

if (isset($_POST['submit'])) {
	$Username = $_POST['Username'];
	$Email = $_POST['Email'];
	$Password = md5($_POST['Password']);
	$Cpass = md5($_POST['Cpass']);

	if ($Password == $Cpass) {
		$sql = "SELECT * FROM signup WHERE Email='$Email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO signup (Username, Email, Password)
					VALUES ('$Username', '$Email', '$Password')";
			$result = mysqli_query($conn, $sql);
      header("Location: Acc/Acc.php");
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$Username = "";
				$Email = "";
				$_POST['Password'] = "";
				$_POST['Cpass'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
  
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
<!--Sign up form start new visitor-->        
      <form action="SignUp.php" class="sign-up-form" method="POST" >
        <h2 class="title">Sign Up</h2>
  <!--Username-->
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="username" placeholder="Username"  name="Username">
        </div>
  <!--email-->
        <div class="input-field">
          <i class="fas fa-envelope"></i>
          <input type="email" placeholder="Email"  name="Email">
        </div>
  <!--Password-->
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password"  name="Password">
        </div>          
  <!--ConfirmPass-->
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Confirm Password"  name="Cpass">
        </div>
  <!--Sign up / Submit button-->
        <button type="submit" name="submit" class="btn solid" >SignUp</button>

        <p class="social-text">Or sign up with social platforms</p>
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
      

  <!--Sign up form end -->
</div>

<div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Here?</h3>
                    <p>Sign Up and join our FreeCH Community!</p>
                    <button class="btn transparent" id="sign-up-button">Sign Up</button>
                    
                </div>
                
                <img src="play.svg" alt="" class="image"/>
                
            </div>
            

            <div class="panel right-panel">
                <div class="content">
                    <h3>One of Us ?</h3>
                    <p>Welcome back FreeCHer our Gaming World welcomes you<br></p>
                    <a href="SignIn.php">Sign In</a>
                </div>
                <img src="together.svg" alt="" class="image"/>
            </div>
    </div>
    </div>
  </div>
    <script src="login.js"></script>
  </body>
</html>