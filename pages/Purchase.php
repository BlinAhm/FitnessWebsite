<?php
    session_start();
    if(isset($_POST['purchase'])){
        require_once '../controllers/OrdersController.php';
        $order = new OrdersController();
        $order->order($_SESSION['user_id'],$_GET['id']);
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/Purchase.css">
        <title>Purchase</title>
    </head>
    <body>
        <div class="background">
            <div class="card">
                <h1>Confirm purchase:</h1>
                <form method="POST" class="confirm">
                    <p><?php
                        if($_GET['type'] == 'dayclub'){
                            echo 'Day Club - ';
                        }elseif($_GET['type'] == 'uniclub'){
                            echo 'Uni Club - ';
                        }else{
                            echo 'Multi Club - ';
                        }
                        echo $_GET['validity'].' Months';
                     ?></p>
                     <p><?php echo 'Price: '.$_GET['price'].' €'; ?></p>
                     <input type="submit" name="purchase" value="Confirm">
                </form>
            </div>
        </div>
    </body>
</html>