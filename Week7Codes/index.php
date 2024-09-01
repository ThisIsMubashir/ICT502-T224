

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Code</title>
</head>
<body>
    <h2>Gussess Game</h2>
    <p>Guess a number between 1 and 100. You have 10 attempts.</p>

    <form action="" method="post">
        <input type="number" name="guess" min="1" max="100">
        <input type="submit" value="Submit">
    </form> 
    <?php
        if (isset($_POST['guess'])) {
            $guess = $_POST['guess'];
            $correctNumber = rand(1, 100);

            if ($guess == $correctNumber) {
                echo "<p>Congratulations! You guessed the correct number.</p>";
            } elseif ($guess < $correctNumber) {
                echo "<p>Too low! Try again.</p>";
            } else {
                echo "<p>Too high! Try again.</p>";
            }
        } else {
            echo "<p>Please enter a number.</p>";
        }
    ?>
    <br>
    <h4>Draw Number is 
        <?php
        echo $correctNumber;
        ?>
    </h4>
    
</body>
</html>