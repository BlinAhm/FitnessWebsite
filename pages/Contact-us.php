<?php
    require_once '../php/Navigation.php';
    require_once '../php/FooterDetails.php';
    require_once '../controllers/MessageController.php';
    $msg = new MessageController();

    if(isset($_POST['msgSend'])){
        
        echo $_POST['fullName'];
        echo $_POST['email'];
        echo $_POST['title'];
        echo $_POST['msg'];
        $msg->send($_POST);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/Contact-us.css">
    <title>Rebuild Fitness - Contact us</title>
</head>
<body>
    <div class="header">
        <img src="../img/fit-logo.png" alt="Logo">
        <div class="nav-div">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Home.php#about-us">About us</a></li>
                <li><a href="Home.php#find-your-club">Find your club</a></li>
                <li><a href="Memberships.php">Memberships</a></li>
                <li><a id="contact-nav" href="Contact-us.php">Contact us</a></li>
                <?php
                    $navLoggedIn = new Navigation();
                ?>
            </ul>
        </div>
    </div>

    <div class="contact-head">
        <div class="contact-main">
            <div class="contact-main-details">
                <h1 id="address">Address and Contact</h1>
                <p>Adress: Rr. Bedri Shala “Bregu i Diellit” <br>
                    10000 Prishtinë, Republika e Kosovës <br>
                    Tel: +383 49 54 25 59 <br>
                    Web: www.rebuildfit.eu <br>
                    Email: ba51658@ubt-uni.net <br>
                           bk51926@ubt-uni.net </p>
            </div>
            <form method="post" class="contact-right">
                <div id="write">
                    <h2>Write us!</h2>
                    <input name="fullName" type="text" placeholder="Name and Surname">
                    <input name="email" type="email" placeholder="E-mail">
                    <input name="title" type="text" placeholder="Title">
                </div>
                <div class="write2">
                    <textarea name="msg" placeholder="Message"></textarea>
                    <input name="msgSend" type="submit" value="Send">
                </div>
            </form>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6978.752978453489!2d21.172884003877993!3d42.657028375113775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1639606417359!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

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
                    <li><a href="Home.php#memberships">Memberships</a></li>
                    <?php
                        $footer = new FooterDetails();
                    ?>
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

</body>
</html>
