<?php
include 'header.php';
?>
<html>
<head>
    <link rel="stylesheet" href="workout.css">
    <title>FitBite</title>
    <link rel="icon" href="img/icon.png">
</head>

<body>
    <br>
    <h1 style="color: black; text-align: center;">Let's get start buddy..!</h1>
    <br>
    <img src="img/workout.jpg" alt="cbum" class="center">
    <br>
    <h1 style="color: black; text-align: center;">Choose Your workout</h1>
    <p style="color: black;text-align: center;">Select the Body part You want to train</p>

    <div class="workout">
        <div class="container">
           <div class="box">
                <img class="workout-img" src="img/chest.jpg" alt="push">
                <div class="overlay-button">
                    <a href="push.html"><input type="button" value="Get Started" id="goal_button_push" name="push" style="height: 25px;"></a>
                </div>
            </div>
            <div class="box">
                <img class="workout-img" src="img/back.jpg" alt="pull">
                <div class="overlay-button">
                    <a href="pull.html"><input type="button" value="Get Started" id="goal_button_pull" name="pull" style="height: 25px;"></a>
                </div>
            </div>
            <div class="box">
                <img class="workout-img" src="img/leg.jpg" alt="legs">
                <div class="overlay-button">
                    <a href="legs.html"><input type="button" value="Get Started" id="goal_button_legs" name="legs" style="height: 25px;"></a>
                </div>
            </div>
        </div>
    </div>

    <h1 style="color: black; text-align: center;">Trainer</h1>
    <p style="color: black;text-align: center;">For Better guidence and Learning you can follow These Trainers</p>
    <br>

    <div class="Trainer">
        <div class="container1">
            <div class="box1">
                <img class="influencer-img" src="img/influencer1.jpg" alt="influencer1">
                <div class="overlay-button1">
                    <a href="https://www.instagram.com/ishaanthakurr?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="img/insta.jpg" alt="" id="insta-icon"></a>
                </div>
            </div>
            <div class="box1">
                <img class="influencer-img" src="img/bro.jpg" alt="influencer2">
                <div class="overlay-button1">
                    <a href="https://www.instagram.com/yourfitnesstories?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="img/insta.jpg" alt="" id="insta-icon"></a>
                </div>
            </div>
            <div class="box1">
                <img class="influencer-img" src="img/influencer3.jpg" alt="influencer3">
                <div class="overlay-button1">
                    <a href="https://www.instagram.com/saketgokhale?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="img/insta.jpg" alt="" id="insta-icon"></a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <h1 style="color: black; text-align: center;">Gym Playlist</h1>
    <p style="color: black;text-align: center;">Enhance Your Workout with These Playlist</p>

    <div class="center-wrapper">
        <div class="iframe-container">
            <iframe style="border-radius:12px"
                src="https://open.spotify.com/embed/playlist/72j8XdEY3UrGOKkQqVa3pv?utm_source=generator" width="100%"
                height="352" frameBorder="0" allowfullscreen=""
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                loading="lazy"></iframe>
        </div>
    </div>
    <br>
</body>
<footer>
    &copy; 2024 FitBite. All rights reserved.
  </footer>
</html>
