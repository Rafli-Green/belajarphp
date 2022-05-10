<?php
// Soal: buatlah conditional untuk mengecek apakah password adalah "SIJA123"
// kalau iya maka echo "Masuk" kalau salah maka echo "Gagal login"

$usrinpt = "SIJA123";
$password =  "SIJA123";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Form Login</title>
</head>
<body>
  <?php if ($usrinpt == $password): ?>
    <div style="color: green">
      Masuk
    </div>
  <?php else: ?>
    <div style="color: red">
      Gagal login
    </div>
  <?php endif; ?>
</body>
</html>