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
    </form>

  </body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
function interest($amount, $months, $rate){
  //p*(1+r/n)^n
  $newamount = $amount*pow(1+$rate/$months, 2);
  echo "$newamount";
}

if (isset($_POST['p3'])) {
  $amount = $_POST['num'];
  $months = $_POST['months'];
  if ($amount>250000) {
    $rate = 6;
    interest($amount, $months, $rate);
  }
  elseif ($amount>100000) {
    $rate = 5.5;
    interest($amount, $months, $rate);
  }
  elseif ($amount>50000) {
    $rate = 5;
    interest($amount, $months, $rate);
  }
  elseif ($amount>10000) {
    $rate = 4.5;
    interest($amount, $months, $rate);
  }
  else {
    $rate = 4;
    interest($amount, $months, $rate);
  }



}
 ?>
