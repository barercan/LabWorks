<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="IT306Lab3.php" method="post">
      <input type="number" name="num" value="50">
      <input type="submit" name="Gün" value="Gün Bul">
      <input type="submit" name="2ve3" value="2ve3">
      <input type="submit" name="part3" value="Part3">
      <input type="submit" name="part4" value="Part4">
    </form>
  </body>
</html>

<?php
if (isset($_POST['Gün'])) {
  $number = $_POST['num'];
  switch ($number+1) {
    case '1':
      echo "Pazartesi";
    case '2':
      echo "Salı";
    case '3':
      echo "Çarşamba";
    case '4':
      echo "Perşembe";
    case '5':
      echo "Cuma";
    case '6':
      echo "Cumartesi";
    case '7':
      echo "Pazar";
    default:
      echo "Please enter 1-7";
  }
}
 ?>
