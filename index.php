<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pi to the Nth Digit Generator</title>      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="PHP, 'Pi to the Nth Digit', 'Github Project', ConsonanceNg">
        <meta name="description" content="This PHP program generates the value of Pi to the nth digit.">
        <meta name="author" content="Moses Ajireloja">
        <link rel="stylesheet" href="stylepi.css" type="text/css" media="all">
    </head>  
    <body>
        <div id="container">
        <h2 class="title">Pi GENERATOR</h2>
        <p class="welcome">Welcome to the Pi Generator. The digit represents the decimal place to which Pi will be generated.</p>
        <!-- Display the Pi Generator Form by default -->
            <form action="index.php" method="post" class="form">
                Enter a Digit (Maximum of 12):
                <input type="number" name="digit" min="1" max="12" title="Enter a number between 1 and 12"><br>
                <input type="submit" name="submit" value="Generate Pi" class="button">
                <input type="reset" name="Reset"  value="Reset Digit" class="button">
            </form>
            
            <div id="result">
        <?php
        // Validate the user's input and then generate the value for Pi.
            if (isset($_POST['submit']) && !empty($_POST['submit'])) {
                // Ensure that a number has been entered.
                if (isset($_POST['digit']) && !empty($_POST['digit']) && is_numeric($_POST['digit'])) {
                    // Then obtain the number entered.
                    $digit = htmlentities(trim($_POST['digit']));
                    // Now generate the value of Pi.
                    $result = round(Pi(), $digit);
                    // Append properly
                    if ($digit == 1) {
                        $append = "st"; // as in 1st
                    }
                    elseif ($digit == 2) {
                        $append = "nd"; // as in 2nd
                    }
                    elseif ($digit == 3) {
                        $append = "rd"; // as in 3rd
                    }
                    else {
                        $append = "th"; // as in 4th, 5th, ... 12th.
                    }
                    // Display result
                    echo "<p class=\"title\">Result: {$result}</p>";
                    echo "<p>" . "Dear Guest, the value of Pi to the <b>{$digit}{$append}</b> digit is <b>{$result}</b>" . "</p>";
                    echo "<p>" . "Thank you for using the Pi Generator." . "</p>";
                    
                } else {
                    // Notify user to enter a valid number.
                    echo "<p>Sorry, something went wrong.</p>";
                    echo "<p>Please enter a valid number and try again.</p>";
                    echo "<p>Thank you.</p>";
                }
            } 
                echo "<center><a href=\"index.php\" class=\"refresh\">REFRESH</a></center>";
      //  } 
        ?>
        </div>
        </div>
    </body>
</html>
    