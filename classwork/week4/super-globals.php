<!doctype html>
<html>
<head>
  <title>Super Globals</title>
</head>
<body>
  <?php
    // assign the SERVER query string key to a variable and print its value to output
    // create an html form that will post back to this script with values from the form and print those values to output
    // create an html form that will upload a file and post back to this script the FILES superglobal
    // Next read the file contents and print to output
  ?>

  <p>SERVER</p>
  <pre>
  <?php print_r($_SERVER); ?>
  </pre>

  <p>POST</p>
  <pre>
  <?php print_r($_POST); ?>
  </pre>

  <p>GET</p>
  <pre>
  <?php print_r($_GET); ?>
  </pre>

  <p>FILES</p>
  <pre>
  <?php print_r($_FILES); ?>
  </pre>

  <p>ENV</p>
  <pre>
  <?php print_r($_ENV); ?>
  </pre>

  <p>SESSION</p>
  <pre>
  <?php print_r($_SESSION); ?>
  </pre>

  <p>REQUEST</p>
  <pre>
  <?php print_r($_REQUEST); ?>
  </pre>

  <p>COOKIE</p>
  <pre>
  <?php print_r($_COOKIE); ?>
  </pre>
</body>
</html>
