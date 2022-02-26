<?php
require_once '../php/navigation.php';
require_once '../controllers/MessageController.php';

$msg = new MessageController();

if(isset($_GET['delete'])){
    $msg->delete($_GET);
}
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
                <li><a href="Home.php#about-us">About us</a></li>
                <li><a href="Home.php#find-your-club">Find your club</a></li>
                <li><a href="Memberships.php">Memberships</a></li>
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
            <li><a href="Orders.php">Orders</a></li>
            <li><a href="MembershipDash.php">Memberships</a></li>
        </ul>
        <form class="form">
            <ul class="commands">
                <li><button id="deleteBtn">Delete</button></li>
            </ul>
            <table class="table">
                <thead>
                    <tr>
                        <th class="id">Id</th>
                        <th class="fullN">Full name</th>
                        <th class="email">Email</th>
                        <th class="title">Title</th>
                        <th class="messageBox">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $data = $msg->readData();
                        foreach($data as $msgs): ?>
                        <tr>
                            <td class="id"><?php echo $msgs['contact_id']; ?></td>
                            <td class="fullN"><?php echo $msgs['fullName']; ?></td>
                            <td class="email"><?php echo $msgs['email']; ?></td>
                            <td class="title"><?php echo $msgs['title']; ?></td>
                            <td class="messageBox"><?php echo $msgs['msg']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>

    <div id="deleteForm">
        <form class="deleteForm" method="GET">
            <span class="close">&times</span>
            <p id="headP">Delete message:</p>
            <div>
                <p>Message id:</p>
                <input class="deleteId" type="number" name="deleteId"> 
            </div>
            
            <input class="delete" id="deleteBtn" type="submit" name="delete" value="Delete">
        </form>
    </div>

    <script src="../js/Contact.js"></script>
</body>
</html>