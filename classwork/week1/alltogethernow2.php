<!doctype html>
<html lang="en">
  <head>
    <title>All Together Now 2</title>
  </head>
  <body>
    <p>Create two variables one called $guess and another called $number.</p>
    <?php // Write your else if statement to check if the guess is correct
    $guess = 10;
    $number = 20;
    if ($guess > $number){
    	echo "Your guess is too high";
    }
    else if ($guess < $number){
    	echo "Your guess is too low";
    }	
    	else ($guess == $number) {
    		echo "Your guess is dead on";
    }
        ?>
  </body>
</html>
