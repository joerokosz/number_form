<!-- Chapter 4 Exercise (pages 210-211) -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Number Form</title>
</head>
<body>
    <h2>Number Form</h2>
    <h3>Type in a number and we will square it for you!</h3>
    <?php
        $displayForm = true;
        $number = "";

        // check to see if the form has been submitted yet
        if(isset($_POST["Submit"])) {
            $number = $_POST["data"];
            // now that we know that the form was submitted, let's see if they entered a number or not
            if(is_numeric($number)) {
                $displayForm = false;
            } else {
                echo "<p style='color: red;'>You need to enter a numeric value!</p>";
                $displayForm = true;
            } // end of nested IF/ELSE
        } // end of IF statement

        // decide if the form needs to be displayed in the document
        if($displayForm) {
            // if that variable is true, build out the html form in the document
            ?>
            <form name="numberForm" action="numberForm.php" method="post">
                <label for="data">Enter a number:</label>
                <input type="text" name="data" value="<?php echo $number; ?>" />
                <br/>
                <p><input type="reset" value="Clear Form"/>&nbsp; &nbsp;<input type="submit" name="Submit" value="Send Form" /></p>
            </form>
            <?php
        } else {
            echo "<p>Thank you for entering a number!</p>";
            echo "<p>Your number, $number squared is: ", ($number * $number), ".</p>";
            echo "<p><a href='numberForm.php'>Try Again?</a></p>";
        } // end of IF/ELSE 

    ?>
</body>
</html>