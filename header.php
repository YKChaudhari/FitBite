<?php
session_start();
if (!isset ($_SESSION['user_data'])) {
  header("location:login.html");
  exit;

} else {

  $user_data = $_SESSION['user_data'];
}
?>
<html>
<header>
  <div class="banner">Embrace Serene Life!</div>
  <title>FitBite</title>
  <link rel="stylesheet" href="main.css">
  <link rel="icon" href="img/icon.png">
  <nav>

    <div id="logo">
      <img width="40" height="40" src="img/icon.png">
      FitBite
    </div>

    <ul class="navigation-menu">
      <li>
        <a href="main.php">Home</a>
      <li>
        <a href="profile.php">My Profile</a>
      </li>
      <li>
        <a href="blog.php">Blogs</a>
      </li>
      <li>
      <?php 
        if($_SESSION['user_data']['subscription']=='gold'|| $_SESSION['user_data']['subscription']== 'ultimate'){
          echo "<a href='recepie.php'>Recepies</a>";
        }
      ?>
      </li>
      <li>
      <?php 
        if($_SESSION['user_data']['subscription']=='ultimate'){
          echo "<a href='workout.php'>Workouts</a>";
        }
      ?>
      </li>
      <li>
        <a href="about.php">About Us</a>
      </li>
      <li>
        <a href="logout.php">LogOut</a>
      </li>
    </ul>
  </nav>
</header>
<?php
// print_r($_SESSION);
?>