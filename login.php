<?php
session_start();
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

if (isset($_POST['login'])) {
    $login_email_address = $_POST['email'];
    $login_password = $_POST['password'];

    $sql2 = "SELECT * FROM users WHERE email='$login_email_address' AND password='$login_password'";
    $result = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result) == 1) {
        $user_data=mysqli_fetch_assoc($result);
        $_SESSION['user_data']=$user_data;
        header("Location: main.php");
        exit;
    } else {
        echo "<script>alert('Login Error');window.history.back();</script>";
    }
} elseif (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $sql1 = "INSERT INTO users (u_name, email, password) VALUES ('$name', '$email', '$password')";
    mysqli_query($conn,$sql1);

    $sql3 = "SELECT * FROM users WHERE u_name = '$name'";
    $result1 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result1) == 1) {
        $user_data1=mysqli_fetch_assoc($result1);
        $_SESSION['user_data']=$user_data1;
        header("Location: main.php");
        exit;
    } 

}

mysqli_close($conn);
?>