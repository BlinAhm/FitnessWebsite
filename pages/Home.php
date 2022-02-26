
<?php
    require_once '../php/navigation.php';
    require_once '../php/FooterDetails.php';
    session_start();
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
            <a href=""><img src="../img/backdeal-template.png" alt="Deals"></a>
        </div>
    </div>

    <div id="about-us" class="about-us">
        <div class="about">
            <div class="judgements">
                <img src="../img/judgement.jpg" alt="">
                <div>
                    <h1>NO JUDGMENTS</h1>
                    <p>Some may call it a tagline, but for us, it’s a way of life. <br>
                    It’s our Monday-thru-every-day mantra. An unfiltered philosophy that drives us to create a community and a gym for all. <br><br>
                    No judgments means room for everyone, regardless of shape, size, age, race, gender or fitness level. <br>
                    No matter your workout of choice, we want you to feel good while reaching your goals. Join the fun.</p>
                </div>
            </div>

            <div class="why-we-do">
                <div>
                    <h1>Why We Do What We Do</h1>
                    <p>We started modestly as one small gym in a humble basement studio in Prishtina in 2001 as a welcoming place for a diverse group of people to get fit. <br> 
                    While we believe in the power of fitness to improve lives, we also know exercise is hard work and everyone can use a little more motivation. So we’ve fused fitness and entertainment so that we can make serious exercise fun.</p>
                </div>
                <img src="../img/why-we-do.jpg" alt="">
            </div>
        </div>
    </div>


    <div class="find-your-club" id="find-your-club">
        <div class="fyc-text">
            <h1>Find your club</h1>
            <p>Join a welcoming gym that exists to help you get to a <br> healthier place - by giving the right support <br> at the right times, in the ways you want.</p>
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