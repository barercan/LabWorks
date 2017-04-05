<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 8</title>
  </head>
  <body>
    <form class="" action="IT306Lab8.php" method="post">
      <input type="number" name="sayi" value="">
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST["submit"])) {
  $N = $_POST["sayi"];
  for ($i=0; $i < $N ; $i++) {
    $array[$N] = rand(1,1000);
    echo "$array[$N]<br>";
  }
}
 ?>
