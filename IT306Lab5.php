<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

<?php
if (isset($_POST['3'])) {
  $amount = $_POST['num'];
  $months = $_POST['months'];
  if (amount>250000) {
    $rate = 6;
    echo interest($amount, $months, $rate);
  }
  elseif (amount>100000) {
    $rate = 5.5;
    echo interest($amount, $months, $rate);
  }
  elseif (amount>50000) {
    $rate = 5;
    echo interest($amount, $months, $rate);
  }
  elseif (amount>10000) {
    $rate = 4.5;
    echo interest($amount, $months, $rate);
  }
  else {
    $rate = 4;
    echo interest($amount, $months, $rate);
  }

  function interest($amount, $months, $rate){
    //p*(1+r/n)^n
    $newamount = amount*pow(1+rate/months, 2);
    return $newamount;
  }

}
 ?>
