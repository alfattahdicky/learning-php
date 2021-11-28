<?php
  // isset => return boolean, checking variable
  if(!isset($_GET['nama']) || !isset($_GET['nim']) || !isset($_GET['city'])) {
    // Redirect to page first
    header('Location: get.php');
    exit;
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Person</title>
</head>
<body>
  <h1>Detail Person</h1>
  <ul>
    <li><?= $_GET['nama'] ?></li>
    <li><?= $_GET['nim'] ?></li>
    <li><?= $_GET['city'] ?></li>
  </ul>

  <a href="./get.php">Kembali ke Data Person</a>
  
</body>
</html>