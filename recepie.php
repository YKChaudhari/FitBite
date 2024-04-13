<?php
include 'header.php';
$user_data = $_SESSION['user_data'];
$goal=$user_data['goal'];

?>
<html>
<head>
    <link rel="stylesheet" href="recepi.css">
    <script src="workout.js"></script>
    <title>FitBite</title>
    <link rel="icon" href="img/icon.png">
</head>

<body>
<br>
<h1 style=" text-align: center;"><b>New recipes to try</b></h1>
<br>
<h2 style=" text-align: center;margin-left: 100px;margin-right: 100px; "> Our recipe developers and nutritionists are behind the scenes creating easy meals with lots of healthy ingredients. We’re talking lighter versions of comfort food faves, and satisfying takes on salads and bowls. Here’s just a taste of their latest and greatest.</h2>

    <img src="img/healthy.jpg" alt="cbum" class="center">

    <h1 style=" text-align: center;">Choose Your Diet Plan</h1>
    <h3 style="color: green;text-align: center;">Try the recipes you like</h3>

    <div class="workout">
        <div class="container">
           <div class="box">
                <img class="workout-img" src="img/w2.jpg" alt="push">
                <div class="overlay-button">
                    <a href="weightloss.php"><input type="button" value="Get Started" id="goal_button_push"  style="height: 25px;" <?php echo $goal=='weight-loss'?'':'disabled'; ?>></a>
                </div>
            </div>
            <div class="box">
                <img class="workout-img" src="img/w1.jpg" alt="pull">
                <div class="overlay-button">
                    <a href="weightgain.php"><input type="button" value="Get Started" id="goal_button_pull"  style="height: 25px;" <?php echo $goal=='weight-gain'?'':'disabled'; ?>></a>
                </div>
            </div>
            <div class="box">
                <img class="workout-img" src="img/w3.jpg" alt="legs">
                <div class="overlay-button">
                    <a href="musclegain.php"><input type="button" value="Get Started" id="goal_button_legs" style="height: 25px;" <?php echo $goal=='muscle-gain'?'':'disabled'; ?>></a>
                </div>
            </div>
        </div>
    </div>

    <h1 style="color: black; text-align: center;">Nutritionist</h1>
    <p style="color: black;text-align: center;">For Better guidence and Learning you can follow These Nutritionist</p>
    <br>

    <div class="Trainer">
        <div class="container1">
            <div class="box1">
                <img class="influencer-img" src="img/nutri1.jpg" alt="influencer1">
                <div class="overlay-button1">
                    <a href="https://www.instagram.com/riteshbhandarifit?igsh=NjM2cWdudnpybGUw"><img src="img/insta.jpg" alt="" id="insta-icon"></a>
                </div>
            </div>
            <div class="box1">
                <img class="influencer-img" src="img/nutri2.jpg" alt="influencer2">
                <div class="overlay-button1">
                    <a href="https://www.instagram.com/mrbfit_?igsh=MWExcG44MmNjZWQ2MQ=="><img src="img/insta.jpg" alt="" id="insta-icon"></a>
                </div>
            </div>
            <div class="box1">
                <img class="influencer-img" src="img/nutri3.jpg" alt="influencer3">
                <div class="overlay-button1">
                    <a href="https://www.instagram.com/enrich_lifestyle_with_urvi?igsh=MTA4ZnlzZ2E0aXQ5NA=="><img src="img/insta.jpg" alt="" id="insta-icon"></a>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>
<br>
<br>
<footer>
    &copy; 2024 FitBite. All rights reserved.
  </footer>
</html>