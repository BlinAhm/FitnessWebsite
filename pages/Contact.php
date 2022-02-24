<?php
require_once '../php/navigation.php';
require_once '../controllers/MessageController.php';
session_start();

$msg = new MessageController();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/Contact.css">
    <title>Contact</title>
</head>
<body>
    <div class="header">
        <img src="../img/fit-logo.png" alt="Logo">
        <div class="nav-div">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="#about-us">About us</a></li>
                <li><a href="#find-your-club">Find your club</a></li>
                <li><a href="#memberships">Memberships</a></li>
                <li><a href="Contact-us.php">Contact us</a></li>
                <?php
                    $navLoggedIn = new Navigation();
                ?>
            </ul>
        </div>
    </div>

    <div class="contents">
        <ul class="dashboard-nav">
            <li><a href="Admin.php">Admin</a></li>
            <li><a href="Users.php">Users</a></li>
            <li><a href="Contact.php" id="dash-nav">Contact</a></li>
        </ul>
        <form class="form">
            <ul class="commands">
                <li><button id="deleteBtn">Delete</button></li>
            </ul>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>Title</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $data = $msg->readData();
                        foreach($data as $msgs): ?>
                        <tr>
                            <td><?php echo $msgs['contact_id']; ?></td>
                            <td><?php echo $msgs['fullName']; ?></td>
                            <td><?php echo $msgs['email']; ?></td>
                            <td><?php echo $msgs['title']; ?></td>
                            <td><?php echo $msgs['msg']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>

</body>
</html>