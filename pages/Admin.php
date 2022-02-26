<?php
require_once '../controllers/AdminController.php';
require_once '../php/navigation.php';

$admin = new AdminController();
if(isset($_POST['insert'])){
    $admin->insert($_POST);
    // $admin->insertActivity();
}
if(isset($_GET['delete'])){
    $admin->delete($_GET);
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/Admin.css">
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
                    $navLoggedIn = new Navigation();
                ?>
            </ul>
        </div>
    </div>

    <div class="contents">
        <ul class="dashboard-nav">
            <li><a href="Admin.php" id="dash-nav">Admin</a></li>
            <li><a href="Users.php">Users</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Orders.php">Orders</a></li>
            <li><a href="MembershipDash.php">Memberships</a></li>
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
                    <?php
                        $data = $admin->readAdmins();
                        
                        foreach($data as $admins): ?>
                        <tr>
                            <td><?php echo $admins['admin_id']; ?></td>
                            <td><?php echo $admins['user_Id']; ?></td>
                            <td><?php echo $admins['name']; ?></td>
                            <td><?php echo $admins['lastName']; ?></td>
                        </tr>
                        <?php endforeach;?>
                </tbody>
            </table>
            <table class="activity">
                <thead>
                    <th>Activity</th>
                </thead>
                <tbody>
                    <?php
                        
                    ?>
                    <td class="placeholder"></td>
                </tbody>
            </table>
        </form>
    </div>

    <div id="insertForm">
        <form class="insertForm" method="POST">
            <span class="close">&times</span>
            <p id="headP">Add admin:</p>
            <div>
                <p>User id:</p>
                <input class="userInputs" type="text" name="userId">
            </div>
            
            <input class="save" type="submit" name="insert" value="Save">
        </form>
    </div>

    <div id="deleteForm">
        <form class="deleteForm" method="GET">
            <span class="close">&times</span>
            <p id="headP">Remove admin:</p>
            <div>
                <p>User id:</p>
                <input class="deleteId" type="number" name="deleteId"> 
            </div>
            
            <input class="delete" id="deleteBtn" type="submit" name="delete" value="Delete">
        </form>
    </div>

    <script src="../js/Admin.js"></script>
</body>
</html>




