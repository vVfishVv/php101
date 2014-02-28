<!doctype html>
<html lang="en">
  <head>
    <title>if statment!</title>
  </head>
  <body>
    <p>Complete the if statement</p>
    <p>
      <?php
        $age = 21;     // Set this to a number greater than 18
        $oldAge ="You're old enought to vote!";
        
        if ($age > 18) {
          echo $oldAge
          }
          else if ($age == 21){
            echo "Toss down a cold one";
          }
          else{

          echo "You wish that you could vote sucka!";
        
        }
      ?>
    </p>
  </body>
</html>
