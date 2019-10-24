<!DOCTYPE html>
<html lang="en">
<head>
<title>Guessing Game for Rahul Porwal 5a6ce3e5</title>
<meta charset="UTF-8">
</head>
<body>
<h1>Welcome to my guessing game</h1>
<p>
<?php
    $corrnum=42;//$_REQUEST["Correct_number"];
  if ( ! isset($_GET['guess']) ) { 
    echo("Missing guess parameter");
  } else if ( strlen($_GET['guess']) < 1 ) {
    echo("Your guess is too short");
  } else if ( !is_numeric($_GET['guess']) ) {
    echo("Your guess is not a number");
  } else if ( $_GET['guess'] < $corrnum ) {
    echo("Your guess is too low");
  } else if ( $_GET['guess'] > $corrnum ) {
    echo("Your guess is too high");
  } else {
    echo("Congratulations - You are right");
  }
?>
</p>
</body>
</html>