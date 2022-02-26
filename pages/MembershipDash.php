<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/MembershipDash.css">
    <title>Admin</title>
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
                        <th>Admin Id</th>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Last name</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </form>
    </div>

</body>
</html>