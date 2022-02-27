<?php
    session_start();
    require_once '../controllers/MembershipController.php';
    require_once '../controllers/ActivityController.php';
    $member = new MembershipController();
    $activity = new ActivityController();

    if(isset($_POST['insert'])){
        $activity->membershipAdd($_SESSION['name'],$_SESSION['lastName'], $_POST);
        $member->addMembership($_POST);
        
    }
    if(isset($_GET['delete'])){
        $activity->membershipRemove($_SESSION['name'],$_SESSION['lastName'], $_GET);
        $member->removeMembership($_GET);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/MembershipDash.css">
    <title>Memberships</title>
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
                <li><a href="Contact-us.php">Contact us</a></li>
                <?php
                    require_once '../php/Navigation.php';
                    $navLoggedIn = new Navigation();
                ?>
            </ul>
        </div>
    </div>

    <div class="contents">
        <ul class="dashboard-nav">
            <li><a href="Admin.php">Admin</a></li>
            <li><a href="Users.php">Users</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Orders.php">Orders</a></li>
            <li><a href="MembershipDash.php" id="dash-nav">Memberships</a></li>
        </ul>
        <form class="form">
            <ul class="commands">
                <li><button id="insertBtn">Add</button></li>
                <li><button id="deleteBtn">Remove</button></li>
            </ul>
            <table class="table">
                <thead>
                    <tr>
                        <th class="thID">Id</th>
                        <th class="thType">Type</th>
                        <th class="thPrice">Price</th>
                        <th class="thValidity">Validity (Months)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $data = $member->readData();
                        foreach($data as $membership): ?>
                        <tr>
                            <td><?php echo $membership['membership_id']; ?></td>
                            <td><?php echo $membership['type']; ?></td>
                            <td><?php echo $membership['price'].' €'; ?></td>
                            <td><?php echo $membership['validity'].' months'; ?></td>
                        </tr>
                    <?php
                        endforeach;
                    ?>
                </tbody>
            </table>
        </form>
    </div>

    
    <div id="insertForm">
        <form class="insertForm" method="POST">
            <span class="close">&times</span>
            <p id="headP">Add membership:</p>
            <div>
                <p>Membership type:</p>
                <input class="userInputs" type="text" name="type">
                <p>Price:</p>
                <input class="userInputs" type="number" name="price">
                <p>Validity (Months):</p>
                <input class="userInputs" type="number" name="validity">
            </div>
            
            <input class="save" type="submit" name="insert" value="Save">
        </form>
    </div>

    <div id="deleteForm">
        <form class="deleteForm" method="GET">
            <span class="close">&times</span>
            <p id="headP">Remove membership:</p>
            <div>
                <p>Membership id:</p>
                <input class="deleteId" type="number" name="deleteId">
            </div>
            
            <input class="delete" id="deleteBtn" type="submit" name="delete" value="Delete">
        </form>
    </div>

    <script src="../js/Admin.js"></script>
</body>
</html>