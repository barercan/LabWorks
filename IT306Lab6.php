<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="IT306Lab6.php" method="post">
      <input type="text" name="input" value="Input">
      <input type="submit" name="p1" value="Part1">
    </form>
  </body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

if (isset($_POST['p1'])) {

  # code...
}

function part1 ($x){
  if (($x%2)==1) {
    return "Number is odd";
  }
  else {
    return "Number is even";
  }
}
function part2 ($x){
  $x = strtoupper($x);
  return ($x);
}
function part3 ($number){
  $sum = 0;
  do {
      $sum += $number % 10;
  }
  while ($number = (int) $number / 10);
  # code...
}
 ?>
