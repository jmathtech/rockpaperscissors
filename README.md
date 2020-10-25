# Rock, Paper, Scissors
A game of rock, paper, scissors written in PHP within a HTML document.

## DEMO
* [Rock, Paper, Scissors](https://jmath.tech/php/rockpaperscissors.php)

### What I've learned
Using an array to list the options to choose from when the User and Computer says 'SHOOT'.
```php
  $choose = array("Rock", "Paper", "Scissors");
```
This will request any selection from the form with the method "POST" to be sent to this if statement.  
```php
  if($_SERVER["REQUEST_METHOD"] == "POST") 
```

### Example (screenshot)
![image](https://user-images.githubusercontent.com/36749450/96390587-5aff4980-1183-11eb-9e87-70dce6da33e7.png)

