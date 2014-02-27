<!doctype html>
<html lang="en">
  <head>
    <title>PHP!</title>
  </head>
  <body>
    <img src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/>
    <h1>
      <?php
      $welcome = "Let's get started with PHP!";
      echo $welcome;
      ?>
    </h1>
    <p><strong>Generate a list:</strong>
      <?php
      for ($number = 1; $number <= 10; $number++) {
        if ($number <= 9) {
          echo $number . ", ";
        } else {
          echo $number . "!";
        }
      } ?>
    </p>
    <p><strong>Things you can do:</strong>
      <?php
        $things = array("Talk to databases", "Send cookies", "Evaluate form data", "Build dynamic webpages");
        foreach ($things as $thing) {
          echo "<li>$thing</li>";
        }
        unset($thing);
        ?>
    </p>
    <p><strong>This jumbled sentence will change every time you refresh the page.<strong></p>
    <p>
      <?php
        $words = array("the ", "quick ", "brown ", "fox ", "jumped ", "over ", "the ", "lazy ", "dog ");
        shuffle($words);
        foreach ($words as $word) {
          echo $word;
        }
        unset($word);
      ?>
    </p>
  </body>
</html>
