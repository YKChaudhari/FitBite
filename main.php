<?php
include 'header.php';
?>

<html>

<body>
  <section class="hero">
    <h1>Your One-Stop Solution for Every Fitness Needs!</h1>
    <div class="btn-group">
      <a href="recepie.php"><button class="btn-filled-dark" id="gold" <?php echo $_SESSION['user_data']['subscription']==''?'disabled':''; ?> > Delicious Recepies </button></a>
      <a href="workout.php"><button class="btn-filled-dark" name="ultimate"    <?php echo $_SESSION['user_data']['subscription']=='ultimate'?'':'disabled'; ?>> Workout </button></a>
    </div>

  </section>
  <section>
    <h2>Shop by Services</h2>

    <ul class="shop-pets">
      <li class="card-large card-dark" id="sup-cat">
        <div class="card-image"><img src="img/P6.png">
        </div>
        <ul>Basic
          <li><a href="#">Diet Tracking</a></li>
          <a href="features.php" class="btn-filled-dark"   id="basic" > It's Free </a>
        </ul>
      </li>
      <li class="card-large card-dark" id="sup-bird">
        <div class="card-image"><img src="img/P4.png">
        </div>
        <ul>Gold
          <li><a href="#">Delicious Recepies</a></li>
          <!-- <form action="receipt.php" method="post" target="_BLANK" >
          <button type="submit" class="btn-filled-dark" id = "gold" name="subscription"  value="gold" onclick="gold()"> Purchase for Rs.199 </button>
          </form> -->
          <a   class="btn-filled-dark" href="receipt.php?subscription=gold"  target="_blank"> Purchase for Rs.199 </a>
        </ul>

      </li>
      <li class="card-large card-light" id="sup-fish">
        <div class="card-image"><img src="img/P3.png">
        </div>
        <ul>
          Ultimate
          <li><a href="#">Delicious Recepies</a></li>
          <li><a href="#">Workout Plans</a></li>
         <!-- // <form action="receipt.php" method="post"> -->
            <a   class="btn-filled-dark" href="receipt.php?subscription=ultimate" target="_blank"> Purchase for Rs.299 </a>
          <!-- </form> -->
        </ul>
      
      </li>
    </ul>
  </section>

  <section>
    <h2>Our Services</h2>

    <ul class="services">
      <li class="card-large card-dark card-wide" id="serv-groom">
        <div class="card-image"><img src="img/P2.png">
        </div>
        <ul>
          Recepies<span class="subtitle">Delecious and healthy recepies is our speciality.</span>
          You can get access to delecious and healthy recepies with their ingredients here at Rs.199 per month.
          <a href="recepie.php"><button class="btn-filled-dark" id="gold1"   <?php echo  $_SESSION['user_data']['subscription']==''?'disabled':''; ?>> Checkout Recepies </button></a>

        </ul>
      </li>

      <li class="card-large card-dark card-wide" id="serv-groom">
        <div class="card-image"><img src="img/P7.png">
        </div>
        <ul>
          Workouts<span class="subtitle">Pull weights and pump muscles.</span>
          You can get access to workout plans here at Rs.299 per month.
          <a href="workout.php"><button class="btn-filled-dark" name="ultimate" id="ultimate1"  <?php echo $_SESSION['user_data']['subscription']=='ultimate'?'':'disabled'; ?>> Workout Plans </button></a>

        </ul>
      </li>

    </ul>
  </section>

  <section>
    <ul class="services">
      <li class="card-large card-dark card-wide" id="serv-groom">
        <div class="card-image"><img src="img/Tracking.png">
        </div>
        <ul>
          Diet Tracking<span class="subtitle">Keep track of your health with us.</span>
          You can keep track of what you eat.
            <a href="features.php"><button class="btn-filled-dark" name="basic" id="diet-tracking" > Diet Tracking </button></a>

        </ul>
      </li>
    </ul>
  </section>
  <section id="locate">

    <div>
      <h2>Location &amp; Hours</h2>
      <p>Our knowledgeable and friendly staff is always ready to assist you in making the best choices for your healthy
        and fit life.</p>
        <p> Park Lane, Pune </p>
      <div class="btn-group">
        <button class="btn-filled-dark">Find us...</button>
        <button class="btn-outline-dark btn-hover-color"> Contact Us</button>
      </div>
    </div>
  </section>
</body>
<script>
  
  function hello(){
    alert("hello");
  }

  function gold() {
      alert("gold");
        // Enable the buttons after form submission
        document.getElementById('gold1').removeAttribute('disabled');
        document.getElementById('gold').removeAttribute('disabled');
  }


</script>
<footer>
  &copy; 2024 FitBite. All rights reserved.
</footer>
</html>