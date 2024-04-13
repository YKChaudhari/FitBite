<?php
session_start();

$user_data = $_SESSION['user_data'];
$u_id= $user_data['u_id'];


$servername = "localhost";
$username = "root";
$password = "";
$databasename = "registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);


$subscription;
$amount;

if(($_REQUEST['subscription']) == 'gold'){
    $subscription='gold';
    $amount='Rs. 199';
}
else if(($_REQUEST['subscription']) == 'ultimate'){
    $subscription='ultimate';
    $amount='Rs. 299';
    
} 
$_SESSION['user_data']['subscription'] = $subscription;
 $sql="UPDATE `users` SET `subscription`='$subscription' WHERE `u_id`='$u_id'";

mysqli_query($conn, $sql);

$currentdate=date('y/m/d');


?>

<head>
    <title>FitBite</title>
    <link rel="stylesheet" href="receipt.css">
    <link rel="icon" href="img/icon.png">
</head>

<body>
    <div class="receipt-container">
        <h1 align="center">Subscription Purchase Receipt</h1>

        <div class="receipt-header">
            <img src="img/icon.png" width="100">
            <p id="subscriptionName">Subscription Name: <strong><?php  echo $subscription;  ?></strong></p>
            <p>Purchase Date: <strong id="purchaseDate"><?php  echo $currentdate;  ?></strong></p>
        </div>

        <div class="receipt-body">
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="itemName"><?php  echo $subscription;  ?></td>
                        <td id="itemPrice"><?php  echo $amount;  ?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td id="totalPrice"><?php  echo $amount;  ?></td>
                    </tr>
                </tfoot>
            </table>
            <p>Payment Method: <strong id="paymentMethod">Credit Card</strong></p>
            <p>Customer Name: <strong id="customerName"><?php echo $user_data['u_name']; ?></strong></p>
            <p>Customer Email: <strong id="customerEmail"><?php echo $user_data['email']; ?></p>
        </div>

        <div class="receipt-footer">
            <p>Thank you for your purchase!</p>
            <p>Non-Refundable under any circumstances</p>
            <p>Support: support@FitBite.com</p>
        </div>
    </div>
</body>
