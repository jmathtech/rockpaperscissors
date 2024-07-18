<!DOCTYPE html>
<html>
<head>
    <title>Rock, Paper, Scissors | SHOOT!</title>
    <link rel="stylesheet" href="css/rpsstyle.css">
</head>
<body>
    <table border="1px">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <tr>
                <td>
                    <h2>Rock, Paper, Scissors</h2>
                    <h4>by Jamil Matheny</h4>
                </td>
            </tr>
            <tr>
                <td>Choose one of the three options:</td>
            </tr>
            <tr>
                <td>
                    <input type="radio" id="rock" name="user_choice" value="Rock" />
                    <label for="rock">Rock</label><br />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" id="paper" name="user_choice" value="Paper" />
                    <label for="paper">Paper</label><br />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" id="scissors" name="user_choice" value="Scissors" />
                    <label for="scissors">Scissors</label><br />
                </td>
            </tr>
            <tr>
                <td colspan="5"><input type="submit" value="Submit" /></td>
            </tr>
            <tr>
                <td colspan="5">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $user_choice = $_POST['user_choice'];
                        $choices = array("Rock", "Paper", "Scissors");
                        $comp_choice = $choices[rand(0, 2)];

                        if ($user_choice == $comp_choice) {
                            $result = "It's a tie!";
                        } elseif (
                            ($user_choice == "Rock" && $comp_choice == "Scissors") ||
                            ($user_choice == "Paper" && $comp_choice == "Rock") ||
                            ($user_choice == "Scissors" && $comp_choice == "Paper")
                        ) {
                            $result = "YOU WIN!";
                        } else {
                            $result = "YOU LOSE!";
                        }

                        echo 'Player: ' . $user_choice . ' <br><br> CPU: ' . $comp_choice . ' <br><br> Result: <b>' . $result . '</b>';
                    }
                    ?>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>
