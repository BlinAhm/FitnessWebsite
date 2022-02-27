
<?php
    require_once '../php/navigation.php';
    require_once '../php/FooterDetails.php';
    require_once '../php/Text.php';
    session_start();
    $text = new Text();
?>

<html>
<head>
    <link rel="stylesheet" href="../css/Home.css">
    <title>Rebuild Fitness</title>
</head>
<body onload="load()">
    <div class="header">
        <img src="../img/fit-logo.png" alt="Logo">
        <div class="nav-div">
            <ul>
                <li><a id="home-nav" href="Home.php">Home</a></li>
                <li><a href="#about-us">About us</a></li>
                <li><a href="#find-your-club">Find your club</a></li>
                <li><a href="Memberships.php">Memberships</a></li>
                <li><a href="Contact-us.php">Contact us</a></li>
                <?php
                    $navLoggedIn = new Navigation();
                ?>
            </ul>
        </div>
    </div>

    <div class="slideback">
        <div class="slideshow">
            <button id="prevBtn"><i class="arrow left"></i></button>
            <button id="nextBtn"><i class="arrow right"></i></button>
            
            <div class="slides">
                <img src="../img/slide4.jpg" id="lastSlide" alt="">
                <img src="../img/slide1.jpg" alt="">
                <img src="../img/slide2.jpg" alt="">
                <img src="../img/slide3.jpg" alt="">
                <img src="../img/slide4.jpg" alt="">
                <img src="../img/slide1.jpg" id="firstSlide" alt="">
            </div>
        </div>
    </div>

    <div class="deals-holder">
        <div class="deals">
            <a href="Memberships.php"><img src="../img/backdeal-template.png" alt="Deals"></a>
        </div>
    </div>

    <div id="about-us" class="about-us">
        <div class="about">
            <div class="judgements">
                <img src="../img/judgement.jpg" alt="">
                <div>
                    <h1>NO JUDGMENTS</h1>
                    <?php $text->judgements(); ?>
                </div>
            </div>

            <div class="why-we-do">
                <div>
                    <h1>Why We Do What We Do</h1>
                    <?php $text->why(); ?>
                </div>
                <img src="../img/why-we-do.jpg" alt="">
            </div>
        </div>
    </div>


    <div class="find-your-club" id="find-your-club">
        <div class="fyc-text">
            <h1>Find your club</h1>
            <?php $text->fyc(); ?>
        </div>
        <div class="locations">
            <div class="leftL">
                <ul>
                    <li><a href="Locations.php"><img id="star" src="../img/star.png" alt=""></a></li>
                    <li><a href="Locations.php"><img id="star" src="../img/star.png" alt=""></a></li>
                    <li><a href="Locations.php"><img id="star" src="../img/star.png" alt=""></a></li>
                    <li><a href="Locations.php"><img id="star" src="../img/star.png" alt=""></a></li>
                </ul>
            </div>
            <div class="rightL">
                <ul>
                    <li><a href="Locations.php"><img id="star" src="../img/star.png" alt=""></a></li>
                    <li><a href="Locations.php"><img id="star" src="../img/star.png" alt=""></a></li>
                    <li><a href="Locations.php"><img id="star" src="../img/star.png" alt=""></a></li>
                    <li><a href="Locations.php"><img id="star" src="../img/star.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="memberships" id="memberships">
        <h1 id="membershipsH1">Memberships</h1>
        <div class="membership-container">
            <div class="dayclub">
                <h1>Day Club</h1>
                <div>
                    <a href="Memberships.php">1 Month <span>Price 20€</span></a>
                    <a href="Memberships.php">3 Month <span>Price 40€</span></a>
                    <a href="Memberships.php">6 Month <span>Price 50€</span></a>
                    <a href="Memberships.php">12 Month <span>Price 59€</span></a>
                </div>
            </div>
            <div class="uniclub">
                <h1>Uni Club</h1>
                <div>
                    <a href="Memberships.php">1 Month <span>Price 25€</span></a>
                    <a href="Memberships.php">3 Month <span>Price 50€</span></a>
                    <a href="Memberships.php">6 Month <span>Price 70€</span></a>
                    <a href="Memberships.php">12 Month <span>Price 79€</span></a>
                </div>
            </div>
            <div class="multiclub">
                <h1>Multi Club</h1>
                <div>
                    <a href="Memberships.php">1 Month <span>Price 30€</span></a>
                    <a href="Memberships.php">3 Month <span>Price 60€</span></a>
                    <a href="Memberships.php">6 Month <span>Price 85€</span></a>
                    <a href="Memberships.php">12 Month <span>Price 99€</span></a>
                </div>
            </div>
        </div>
    </div>


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
                    <li><a href="#about-us">About us</a></li>
                    <li><a href="#find-your-club">Find your club</a></li>
                    <li><a href="Memberships.php">Memberships</a></li>
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




    <script src="../js/Home.js"></script>
</body>
</html>