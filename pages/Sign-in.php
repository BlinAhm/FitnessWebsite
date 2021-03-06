
<?php
require_once '../php/Text.php';
$text = new Text();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Rebuild Fitness - Sign in</title>
    <link rel="stylesheet" href="../css/Sign-in.css">
</head>
<body>
    <div class="header">
        <img src="../img/fit-logo.png" alt="Logo">
        <div class="nav-div">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Home.php#about-us">About us</a></li>
                <li><a href="Home.php#find-your-club">Find your club</a></li>
                <li><a href="Home.php#memberships">Memberships</a></li>
                <li><a href="Contact-us.php">Contact us</a></li>
                <li><a id="sign-nav" href="Sign-in.php">Sign in</a></li>
            </ul>
        </div>
    </div>
    <form method="post" id="formSignIn">
        <div class="sign-in-container">
            <div class="sign-in">
                <h1>Sign in</h1>
                <h5>Sign in and start working on a healthier future!</h5>
                <input name="email" id="SIemail" class="texts" type="email" placeholder="E-mail">
                <label id="labelSIEmail"></label>
                <input name="password" id="SIpassword" class="texts" type="password" placeholder="Password">
                <label id="labelSIPassword"></label>
                <div class="remember-me">
                    <div class="check">
                        <input type="checkbox"><p>Remember me</p>
                    </div>
                    <a href="" onclick="heh()">Forgot your password?</a>
                </div>
                <input type="button" value="Login" class="login" onclick="signIn()">
                <a href="Sign-up.php#sign-up-container" id="sign-up">Don't have an account? Sign up!</a>
            </div>
        </div>
    </form>
<?php
    if(!empty($_POST)){
        require_once '../php/SignIn.php';
        $signIn = new SignIn();
    }
?>



    <div class="contact-us">
        <div class="contact-div">
            <div class="contact-details">
                <h1>Contact</h1>
                <?php $text->contact(); ?>
            </div>
            <div class="contact-links">
                <h1>Links</h1>
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="Home.php#about-us">About us</a></li>
                    <li><a href="Home.php#find-your-club">Find your club</a></li>
                    <li><a href="Memberships.php">Memberships</a></li>
                    <li><a href="Sign-in.php">Sign in</a></li>
                </ul>
            </div>
            <div class="contact-socials">
                <ul>
                    <li><a id="fb" href="https://facebook.com"><img id="fb" src="../img/fb-logo.PNG" alt="Facebook"></a></li>
                    <li><a id="twitter" href="https://twitter.com"><img src="../img/twitter-logo.png" alt="Twitter"></a></li>
                    <li><a id="insta" href="https://instagram.com"><img src="../img/insta-logo.png" alt="Instagram"></a></li>
                    <li><a id="yt" href="https://youtube.com"><img src="../img/youtube-logo.png" alt="Youtube"></a></li>
                </ul>
            </div>
        </div>

        <div class="line">

        </div>
        <h2 class="footer-name">Copyright Rebuild Fitness ?? 2021</h2>
    </div>

    <script src="../js/Sign-in.js"></script>
</body>
</html>