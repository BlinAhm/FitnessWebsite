<?php
    require_once '../controllers/OrdersController.php';
    session_start();

    $order = new OrdersController();
    if(isset($_POST['insert'])){
        $order->addOrder($_POST);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/Orders.css">
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
            <li><a href="Orders.php" id="dash-nav">Orders</a></li>
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
                        <th class="thID">Id</th>
                        <th class="thID">User Id</th>
                        <th class="thName">Name</th>
                        <th class="thName">Last Name</th>
                        <th class="thValidity">Type</th>
                        <th class="thValidity">Price</th>
                        <th class="thValidity">Validity (Months)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $data = $order->readData();
                        foreach($data as $orders): ?>
                        <tr>
                            <td><?php echo $orders['order_id'] ?></td>
                            <td><?php echo $orders['user_Id'] ?></td>
                            <td><?php echo $orders['name'] ?></td>
                            <td><?php echo $orders['lastName'] ?></td>
                            <td><?php echo $orders['type'] ?></td>
                            <td><?php echo $orders['price'].' €' ?></td>
                            <td><?php echo $orders['validity'].' months' ?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </form>
    </div>

    <div id="insertForm">
        <form class="insertForm" method="POST">
            <span class="close">&times</span>
            <p id="headP">Add order:</p>
            <div>
                <p>User id:</p>
                <input class="userInputs" type="number" name="userId">
                <p>Membership id:</p>
                <input class="userInputs" type="number" name="membershipId">
            </div>
            
            <input class="save" type="submit" name="insert" value="Save">
        </form>
    </div>

    <div id="deleteForm">
        <form class="deleteForm" method="GET">
            <span class="close">&times</span>
            <p id="headP">Remove order:</p>
            <div>
                <p>Order id:</p>
                <input class="deleteId" type="number" name="deleteId">
            </div>
            
            <input class="delete" id="deleteBtn" type="submit" name="delete" value="Delete">
        </form>
    </div>

    <script src="../js/Admin.js"></script>
</body>
</html>