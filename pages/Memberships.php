<?php
    require_once '../php/Navigation.php';
    require_once '../php/FooterDetails.php';
    require_once '../controllers/MembershipController.php';
    session_start();

    $member = new MembershipController();
    $data = $member->readData();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/Memberships.css">
    <title>Rebuild Fitness - Memberships</title>
</head>
<body>
    <div class="header">
        <img src="../img/fit-logo.png" alt="Logo">
        <div class="nav-div">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Home.php#about-us">About us</a></li>
                <li><a href="Home.php#find-your-club">Find your club</a></li>
                <li><a id="membership-nav" href="Memberships.php">Memberships</a></li>
                <li><a href="Contact-us.php">Contact us</a></li>
                <?php
                    $navLoggedIn = new Navigation();
                ?>
            </ul>
        </div>
    </div>

    <div class="membership-head">
        <table class="table">
            <thead>
                <th></th>
                <th class="theader">Memberships</th>
            </thead>
            <tbody class="tbody">
                <tr>
                    <?php
                        $count = 1;
                        foreach($data as $memberships){
                            echo '
                                <td>
                                    <div class="container" id="'.$memberships['type'].'">
                                        <h1>';
                                        if($memberships['type'] == 'dayclub'){
                                            echo 'Day Club';
                                        }elseif($memberships['type'] == 'uniclub'){
                                            echo 'Uni Club';
                                        }elseif($memberships['type'] == 'multiclub'){
                                            echo 'Multi Club';
                                        }else{
                                            echo 'Deal';
                                        }
                                        echo '</h1>
                                        <div>
                                            <div>
                                                <p>'.$memberships['validity'].' Month</p>
                                                <p class="price">Price: '.$memberships['price'].' €</p>
                                                <a href="Purchase.php?id='.$memberships['membership_id'].'&type='.$memberships['type'].'&price='.$memberships['price'].'&validity='.$memberships['validity'].'">Purchase</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                ';
                                if($count % 3 == 0 && $count != 0){
                                    echo '</tr><td><div class="space"></div></td><tr>';
                                }
                                $count++;
                        }
                    ?>
                </tr>
                <td><div class="space"></div></td>
            </tbody>
        </table>
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



</body>
</html>
