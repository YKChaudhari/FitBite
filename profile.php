<?php 
include 'header.php';
$user_data = $_SESSION['user_data'];
$gender= $user_data['gender'];


?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FitBite</title>
  <link rel="stylesheet" href="profile.css">
  <link rel="icon" href="img/icon.png">
</head>

<body>

  <div class="profile-container">
    <div class="profile-header">
      <h1>User Profile</h1>
      <img src="<?php echo ($gender == 'female' || $gender == 'Female') ? 'img/female_profile.jpeg' : 'img/male_profile.jpeg'; ?>" alt="User Image">
      <p class="user-name"><?php echo $user_data['u_name']; ?></p>
      <!--  <button id="subscription" disabled=""></button> -->
    </div>

    <div class="profile-details">
      <h2>Personal Information</h2>

      <form id="profile-form" method="post" action="data.php">
        <table>
        <tr>
            <td><strong>subscription:</strong></td>
            <td><span id="email"><?php echo $_SESSION['user_data']['subscription']; ?></span></td>
          </tr>
          <tr>
            <td><strong>Email:</strong></td>
            <td><span id="email"><?php echo $user_data['email']; ?></span></td>
          </tr>
          <tr>
            <td><strong>Age:</strong></td>
            <td><span name="age"><?php echo $user_data['age']; ?></span></td>
          </tr>
          <tr>
            <td><strong>Weight:</strong></td>
            <td><span name="weight"><?php echo $user_data['weight']; ?></span></td>
          </tr>
          <tr>
            <td><strong>Height:</strong></td>
            <td><span name="height"><?php echo $user_data['height']; ?></span></td>
          </tr>
          <tr>
            <td><strong>Gender:</strong></td>
            <td><span name="gender"><?php echo $user_data['gender']; ?></span></td>
          </tr>
          <tr>
            <td><strong>Goals:</strong></td>
            <td><span name="goals"><?php echo $user_data['goal']; ?></span></td>
          </tr>
        </table>
        <button type="submit" id="edit-button" name="edit" style="width: 10px;height: 5px;border-radius: 8px;" >Edit</button>
      </form>
    </div>
  </div>
</body>

<?php
include 'footer.php';
?>