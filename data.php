<?php 
include 'header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitBite</title>
    <link rel="stylesheet" href="data.css">
    <link rel="icon" href="img/icon.png">
</head>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2> User Data </h2>

        <form method="post" action="update.php">
            Age:    <input type="text" id="age" name="age" placeholder="Age">
            Weight: <input type="text" id="weight" name="weight" placeholder="Weight">
            Height: <input type="text" id="height" name="height" placeholder="Height in cm">
            Gender: <input type="text" id="gender" name="gender" placeholder="Gender">
            <label for="fitness-goals">Select your fitness goal:</label>
            <select id="fitness-goals" name="goal">
                <option value="weight-loss">Weight Loss</option>
                <option value="muscle-gain">Muscle Gain</option>
                <option value="weight-gain">Weight Gain</option>
            </select>
            <input id="btn" type="submit" value="Submit Data" name="update">
        </form>

    </div>
</div>
<?php 
include 'footer.php';
?>
