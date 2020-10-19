<!DOCTYPE html>
<html>
    <head>
        <title>Rock, Paper, Scissors | SHOOT!</title>
            <link rel="stylesheet" href="css/rpsstyle.css">
    </head>

    <body>

        <table border="1px">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <tr>
                    <td><h2>Rock, Paper, Scissors</h2>
                    </td>
                </tr>
                <tr>
                    <td>Choose one of the three options:
                    </td>
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
                    <td colspan="5"><input type="submit" value="Submit" />
                    </td>
                </tr> 
                <tr>
                    <td colspan="5">
                        <?php 
                        
                        if($_SERVER["REQUEST_METHOD"] == "POST")    // data from form being stored in variable
                            {   
                                
                                $user_choice = $_POST['user_choice'];   // user_choice is the name of the variable from the form.
                                $choose = array("Rock", "Paper", "Scissors");   // Using the array to make a choice for the player and the computer.
                                $choice = rand(0, 2);   // Random selection.
                                $comp = $choose[$choice];   // What the computer will choose versus the player.

                            if($choice == $comp)    // If the computer picks the right choice; the computer will win and vice versa.
                                        {
                                            echo 'Player: '.$user_choice.' <br><br> CPU: '.$comp.' <br><br> Result: <b>YOU WIN!</b>';
                                        }
                                    else
                                        {
                                            echo 'Player: '.$user_choice.' <br><br> CPU: '.$comp.' <br><br> Result: <b>YOU LOSE!</b>';
                                        }
                                
                            }
                        ?> 
                    </td>
                </tr>
            </form>
        </table>

    </body>

    
</html>
