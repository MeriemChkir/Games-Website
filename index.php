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

            <form action="SignIn.php" class="sign-in-form">
                <h2 class="title">Sign In</h2>
<!--Username-->      
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username/Email" name="UserName">
                </div>
<!--Password-->
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password"  name="Password">
                </div>
<!--Sign in / Login button-->
                <input type="submit" class="btn solid" value="Login" name="btn-login">
                <p class="social-text">Or sign in with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </form>
<!--Sign in form end-->
            </div>
        

        <div class="signin-signup">

<!--Sign up form start new visitor-->        

            <form action="SignUp.php" class="sign-up-form" method="POST" >
                <h2 class="title">Sign Up</h2>
<!--Username-->
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="username" placeholder="Username"  name="UserName">
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
                <button type="submit" name="submit" class="btn solid">SignUp</button>
                <p class="social-text">Or sign up with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
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
                    <p>Welcome back FreeCHer our Gaming World welcomes you<br> Sign in !</p>
                    <button class="btn transparent" id="sign-in-button">Sign In</button>
                </div>
                <img src="together.svg" alt="" class="image"/>
            </div>
    </div>
    </div>
</div>
    <script src="login.js"></script>
</body>
</html>