<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="IT306Lab5.php" method="post">
      <input type="number" name="num" value="Number">
      <input type="number" name="months" value="Months">
      <input type="submit" name="p3" value="Part3">
      <input type="submit" name="p1" value="Part1">
    </form>

  </body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

if (isset($_POST['p3'])) {
  $amount = $_POST['num'];
  $months = $_POST['months'];
  if ($amount>250000) {
    $rate = 0.06;
    interest($amount, $months, $rate);
  }
  elseif ($amount>100000) {
    $rate = 0.055;
    interest($amount, $months, $rate);
  }
  elseif ($amount>50000) {
    $rate = 0.05;
    interest($amount, $months, $rate);
  }
  elseif ($amount>10000) {
    $rate = 0.045;
    interest($amount, $months, $rate);
  }
  else {
    $rate = 0.04;
    interest($amount, $months, $rate);
  }
}
if (isset($_POST['p1'])) {
  //a
  $x = 10;
  $y= ++$x;
  $z = $y++/$x;
  echo "x = $x<br>";
  echo "y = $y and z = $z<br>";
  //b
  $x=10;
  $y = ($x /2==0)? "X is even" : "X is odd";
  echo "The content of y is : ";
  //c


}
function interest($amount, $months, $rate){
  //p*(1+r/n)^n
  $newamount = $amount*pow(1+$rate/$months, $months);
  echo "$newamount";
}
 ?>
