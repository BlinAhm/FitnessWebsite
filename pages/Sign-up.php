
<html>
<head>
    <title>Rebuild Fitness - Sign up</title>
    <link rel="stylesheet" href="../css/Sign-up.css">
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
    <form method="post" id="form" name="form">
        <div class="sign-up-container" id="sign-up-container">
            <div class="sign-up">
                <h1>Sign up</h1>
                <h5>Sign up now and find out your full potential!</h5>
                <input name="name" id="sName" class="texts" type="text" placeholder="Name">
                <label id="labelName"></label>
                <input name="lastName" id="sLName" class="texts" type="text" placeholder="Last name">
                <label id="labelLName"></label>
                <input name="email" id="sEmail" class="texts" type="email" placeholder="E-mail">
                <label id="labelEmail"></label>
                <input name="password" id="sPassword" class="texts" id="pass" type="password" placeholder="Password">
                <label id="labelPassword"></label>
                <input name="cpass" id="sCPassword" class="texts" id="confirm" type="password" placeholder="Confirm password">
                <label id="labelCPassword"></label>
                <div class="check">
                    <input type="checkbox"><p>I accept the <span><a>Terms and Conditions</a></span></p>
                </div>

                <input name="btnSubmit" type="button" value="Login" class="login" onclick="signUp()">
                <a href="Sign-in.php" id="sign-in">Already have an account? Sign in!</a>
            </div>
        </div>
    </form>

    <?php
        if(!empty($_POST)){
            require_once '../php/LoginValidation.php';
            $validate = new LoginValidate();
        }
    ?>

    <div class="contact-us">
        <div class="contact-div">
            <div class="contact-details">
                <h1>Contact</h1>
                <p>Adress: Rr. Bedri Shala “Bregu i Diellit” <br>
                    10000 Prishtinë, Republika e Kosovës <br>
                    Tel: +383 49 54 25 59 <br>
                    Web: www.rebuildfit.eu <br>
                    Email: ba51658@ubt-uni.net <br>
                           bk51926@ubt-uni.net </p>
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
        <h2 class="footer-name">Copyright Rebuild Fitness © 2021</h2>
    </div>

    <script src="../js/Sign-in.js"></script>
</body>
</html>