<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/Users.css">
    <title>Users</title>
</head>
<body>
    <div class="header">
        <img src="../img/fit-logo.png" alt="Logo">
        <div class="nav-div">
            <ul>
                <li><a href="Home.html">Home</a></li>
                <li><a href="#about-us">About us</a></li>
                <li><a href="#find-your-club">Find your club</a></li>
                <li><a href="#memberships">Memberships</a></li>
                <li><a href="Contact-us.html">Contact us</a></li>
                <div class="divider"></div>
                <li><a id="dash-nav" href="Users.php">Dashboard</a></li>
            </ul>
        </div>
    </div>

    <div class="contents">
        <ul class="dashboard-nav">
            <li><a href="Admin.php">Admin</a></li>
            <li><a href="Users.php" id="dash-nav">Users</a></li>
            <li><a href="Orders.php">Orders</a></li>
        </ul>
        <form class="form">
            <ul class="commands">
                <li><button id="insertBtn">Insert</button></li>
                <li><button id="editBtn">Edit</button></li>
                <li><button id="deleteBtn">Delete</button></li>
            </ul>
        </form>
    </div>

    <div id="insertForm">
        <form class="insertForm" method="POST">
            <span class="close">&times</span>
            <p id="headP">Insert user:</p>
            <div>
                <p>Name:</p>
                <input class="userInputs" type="text" name="name"> 
            </div>
            <div>
                <p>Last name:</p>
                <input class="userInputs" type="text" name="lastName">
            </div>
            <div>
                <p>Email:</p>
                <input class="userInputs" type="email" name="email">
            </div>
            <div>
                <p>Password:</p>
                <input class="userInputs" type="text" name="password">
            </div>
            
            <input class="save" type="submit" name="insert" value="Save">
        </form>
    </div>

    <div id="editForm">
        <form class="editForm" method="GET">
            <span class="close">&times</span>
            <p id="headP">User id:</p>
            <div>
                <input class="id" type="number" name="id"> 
            </div>
            
            <input id="next" class="next" type="submit" name="edit" value="Next">
        </form>
    </div>

    <div id="updateForm">
        <form class="updateForm" method="POST">
            <span class="close">&times</span>
            <p id="headP">Update user with id:</p>
            <div>
                <p>Name:</p>
                <input class="updateInputs" type="text" name="name"> 
            </div>
            <div>
                <p>Last name:</p>
                <input class="updateInputs" type="text" name="lastName">
            </div>
            <div>
                <p>Email:</p>
                <input class="updateInputs" type="email" name="email">
            </div>
            <div>
                <p>Password:</p>
                <input class="updateInputs" type="text" name="password">
            </div>
            
            <input id="update" class="update" type="submit" name="update" value="Update">
        </form>
    </div>

    <script src="../js/Users.js"></script>
</body>
</html>



<?php
require_once '../controllers/UserController.php';

$user = new UserController();
if(isset($_POST["insert"])){
    $user->insert($_POST);
}
if(isset($_GET["edit"])){
    echo $_GET["id"];
}
?>
