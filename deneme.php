<?php
for ($i=10; $i > 0; --$i) {
  echo "$i";

  $email = "serdar@vural";
  try {
    for ($i=0; $i < strlen($email) ; $i++) {
      if ($email[i] == "@") {
        echo "Bu bir email adresidir.";
        break;
        # code...
      }
      else {
        echo "değildir";
      }
      # code...
    }
  } catch (Exception $e) {
    echo "Başarısız";
  }

} ?>