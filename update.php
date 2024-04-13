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

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['update'])){
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $goal = $_POST['goal'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `users` SET `height`='$height',`weight`='$weight',`age`='$age',`goal`='$goal',`gender`='$gender' WHERE u_id='$u_id'";
    mysqli_query($conn, $sql);
    $sql3 = "SELECT * FROM users WHERE u_id = '$u_id'";
    $result1 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result1) == 1) {
        $user_data1=mysqli_fetch_assoc($result1);
        $_SESSION['user_data']=$user_data1;
        header("Location: profile.php");
        exit;
    } 
    
}



?>