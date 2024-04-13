<?php  
include 'header.php';

?>
<html>

<head>
    <title>features</title>
    <link rel="stylesheet" href="features.css">
    <link rel="icon" href="img/icon.png">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- Include your custom CSS for styling if needed -->
        <style>
            /* Customize the loading icon's appearance */
            .loading-icon {
                font-size: 48px; /* Adjust the size as needed */
                color: #007bff; /* Adjust the color as needed */
            }
        </style>
    
</head>


<body>

    <h1 style="text-align: center;">Let's Get Start Buddy!</h1>
    <br>

    <h2 style="text-align: center;">Search the food you are eating</h2>
    <p style="text-align: center;">Check Wether its healthy or not!</p>
    <br>

    <table class="food-info">
        <tr>
            <td>
                <input type="text" id="search" placeholder="Search" style="border-radius: 8px;">
            </td>
            <td>
                <input type="button" value="search" id="searchbutton" style="border-radius: 8px;">
            </td>
        </tr>
        </table>
        <div id="loading_icon" class="loading-icon" style="display: none; text-align: center; padding: 20px;">
            <i class="fas fa-spinner fa-spin"></i> <!-- This is the Font Awesome spinner icon -->
        </div>
    
        <script>

    $(document).ready(function () {
    $("#searchbutton").click(function () {
        // Show loading icon
        $('#loading_icon').show();
        $('#output_data').empty();

        var query = $("#search").val();
        $.ajax({
            method: 'GET',
            url: 'https://api.api-ninjas.com/v1/nutrition?query=' + query,
            headers: { 'X-Api-Key': 'X63ihh9I1CguQXYb29L+gQ==g8nahaIte3Uea8OO' },
            contentType: 'application/json',
            crossDomain: true,   
            success: function (result) {
                // Clear previous data
              

                // Iterate over each item in the result
                result.forEach(function(item) {
                    // Generate a table for the item
                    var table = '<table>';
                    table += '<tr><th>Name</th><td>' + item.name + '</td></tr>';
                    table += '<tr><th>Calories</th><td>' + item.calories + '</td></tr>';
                    table += '<tr><th>Serving Size (g)</th><td>' + item.serving_size_g + '</td></tr>';
                    table += '<tr><th>Total Fat (g)</th><td>' + item.fat_total_g + '</td></tr>';
                    table += '<tr><th>Saturated Fat (g)</th><td>' + item.fat_saturated_g + '</td></tr>';
                    table += '<tr><th>Protein (g)</th><td>' + item.protein_g + '</td></tr>';
                    table += '<tr><th>Sodium (mg)</th><td>' + item.sodium_mg + '</td></tr>';
                    table += '<tr><th>Potassium (mg)</th><td>' + item.potassium_mg + '</td></tr>';
                    table += '<tr><th>Cholesterol (mg)</th><td>' + item.cholesterol_mg + '</td></tr>';
                    table += '<tr><th>Total Carbohydrates (g)</th><td>' + item.carbohydrates_total_g + '</td></tr>';
                    table += '<tr><th>Fiber (g)</th><td>' + item.fiber_g + '</td></tr>';
                    table += '<tr><th>Sugar (g)</th><td>' + item.sugar_g + '</td></tr>';
                    table += '</table>';

                    // Append the table to #output_data
                    $('#output_data').append(table);
                });

                // Hide loading icon
                $('#loading_icon').hide();
            },
            error: function ajaxError(jqXHR) {
                console.error('Error: ', jqXHR.responseText);
                // Hide loading icon in case of error
                $('#loading_icon').hide();
            }
        });
    });
});



        </script>
        
        <div id="output_data">

        </div>
    <br>

    <h2 style="text-align: center;">Lets Track How Much Calories You Eat in a Day</h2>
    <br>
    <table class="food-track">
        <tr style="text-align: center;">
            <td colspan="2">BreakFast</td>
        </tr>
        <tr>
            <td>
                item :
            </td>
            <td>
                <input type="text" id="meal1" placeholder="Enter Calories"   value="0"   style="border-radius: 8px;">
            </td>
        </tr>
        <tr>
            <td>
                item :
            </td>
            <td>
                <input type="text" id="meal2" placeholder="Enter Calories"  value="0"    style="border-radius: 8px;">
            </td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="2">Lunch</td>
        </tr>
        <tr>
            <td>
                item :
            </td>
            <td>
                <input type="text" id="meal3" placeholder="Enter Calories"   value="0"    style="border-radius: 8px;">
            </td>
        </tr>
        <tr>
            <td>
                item :
            </td>
            <td>
                <input type="text" id="meal4" placeholder="Enter Calories"    value="0"    style="border-radius: 8px;">
            </td>
        </tr>
        <tr>
            <td>
                item :
            </td>
            <td>
                <input type="text" id="meal5" placeholder="Enter Calories"   value="0"    style="border-radius: 8px;">
            </td>
        </tr>
        <tr>
            <td>
                item :
            </td>
            <td>
                <input type="text" id="meal6" placeholder="Enter Calories"   value="0"   style="border-radius: 8px;">
            </td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="2">Evening Snacks</td>
        </tr>
        <tr>
            <td>
                item :
            </td>
            <td>
                <input type="text" id="meal7" placeholder="Enter Calories"   value="0"     style="border-radius: 8px;">
            </td>
        </tr>
        <tr>
            <td>
                item :
            </td>
            <td>
                <input type="text" id="meal8" placeholder="Enter Calories"    value="0"     style="border-radius: 8px;">
            </td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="2">Dinner</td>
        </tr>
        <tr>
            <td>
                item :
            </td>
            <td>
                <input type="text" id="meal9" placeholder="Enter Calories"    value="0"   style="border-radius: 8px;">
            </td>
        </tr>
        <tr>
            <td>
                item :
            </td>
            <td>
                <input type="text" id="meal10" placeholder="Enter Calories"    value="0"    style="border-radius: 8px;">
            </td>
        </tr>
        <tr>
            <td>
                item :
            </td>
            <td>
                <input type="text" id="meal11" placeholder="Enter Calories"   value="0"    style="border-radius: 8px;">
            </td>
        </tr>
        <tr>
            <td>
                item :
            </td>
            <td>
                <input type="text" id="meal12" placeholder="Enter Calories"  value="0"   style="border-radius: 8px;">
            </td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="2" style="text-align: center;">Total Calories</td>
        </tr>
        <tr>
            <td><input type="button" value="Calculate" id="cal" style="border-radius: 8px;" onclick="calculate()"></td>
            <td><label id="total_calories" style="border-radius: 8px;"></label> </td>
        </tr>
    </table>
    <br>
    <h2 style="text-align: center;">Let's Check How Many Calories You have Burn!</h2>
    <br>

    <table class="exercise">
        <tr>
            <td>Choose Exercise :</td>
            <td><select id="exercise" style="border-radius: 8px;">
                    <option value="running">Running</option>
                    <option value="walking">Walking</option>
                    <option value="swimming">Swimming</option>
                    <option value="jumping">Jumping</option>
                    <option value="cycling">Cycling</option>
                </select></td>
        </tr>
        <tr>
            <td>Enter Time :</td>
            <td>
                <input type="text" id="exercise_time" style="border-radius: 8px;" placeholder="Enter in minutes">
            </td>
        </tr>
        <tr>
            <td>Enter Weight :</td>
            <td>
                <input type="text" id="Weight" style="border-radius: 8px;" placeholder="Weight">
            </td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="2" style="text-align: center;">Total Calories Burn</td>
        </tr>
        <tr>
            <td><input type="button" id="calories-burn" value="Calculate" style="border-radius: 8px;"
                    onclick="caloriesburn()"></td>
            <td><label id="Calories_burn_amt" style="background-color: white; border-radius: 8px;"></label></td>
        </tr>
    </table>
    <br>
    <br>
</body>
<script>
    var meal1 = document.getElementById("meal1");
    var meal2 = document.getElementById("meal2");
    var meal3 = document.getElementById("meal3");
    var meal4 = document.getElementById("meal4");
    var meal5 = document.getElementById("meal5");
    var meal6 = document.getElementById("meal6");
    var meal7 = document.getElementById("meal7");
    var meal8 = document.getElementById("meal8");
    var meal9 = document.getElementById("meal9");
    var meal10 = document.getElementById("meal10");
    var meal11 = document.getElementById("meal11");
    var meal12 = document.getElementById("meal12");

    var total_calories = 0;

    function calculate() {
        total_calories = parseInt(meal1.value) + parseInt(meal2.value) + parseInt(meal3.value) +
            parseInt(meal4.value) + parseInt(meal5.value) + parseInt(meal6.value) +
            parseInt(meal7.value) + parseInt(meal8.value) + parseInt(meal9.value) +
            parseInt(meal10.value) + parseInt(meal11.value) + parseInt(meal12.value);

        document.getElementById("total_calories").innerHTML = total_calories;
    }
    function caloriesburn() {
        var weight = parseInt(document.getElementById("Weight").value);
        var exercise = document.getElementById("exercise");
        var time = parseInt(document.getElementById("exercise_time").value);
        var total_caloriesburn = 0;
        var perminute = 0;


        if (exercise.value == "running") {
            perminute = 8 * 3.5 * weight / 200;
            total_caloriesburn = perminute * time;
            document.getElementById("Calories_burn_amt").innerHTML = parseInt(total_caloriesburn);
        }
        else if (exercise.value == "walking") {
            perminute = 4 * 3.5 * weight / 200;
            total_caloriesburn = perminute * time;
            document.getElementById("Calories_burn_amt").innerHTML = parseInt(total_caloriesburn);
        }
        else if (exercise.value == "swimming") {
            perminute = 6 * 3.5 * weight / 200;
            total_caloriesburn = perminute * time;
            document.getElementById("Calories_burn_amt").innerHTML = parseInt(total_caloriesburn);
        }
        else if (exercise.value == "jumping") {
            perminute = 7 * 3.5 * weight / 200;
            total_caloriesburn = perminute * time;
            document.getElementById("Calories_burn_amt").innerHTML = parseInt(total_caloriesburn);
        }
        else if (exercise.value == "cycling") {
            perminute = 6 * 3.5 * weight / 200;
            total_caloriesburn = perminute * time;
            document.getElementById("Calories_burn_amt").innerHTML = parseInt(total_caloriesburn);
        }

    }


</script>
<footer>
    &copy; 2024 FitBite. All rights reserved.
</footer>

</html>