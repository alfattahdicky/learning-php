<?php
/*
//  SuperGlobals
//     - Variable milik PHP merupakan Array Associative
//  */
//   var_dump($_GET);

// GET => pengiriman data melalui url diambil/ditangkap oleh super global $_GET
// $_GET['nama'] = 'Dicky AL Fattah';
// $_GET['nim'] = '1903332096';

// var_dump($_GET);

$persons = [
  [
    "id" => 1,
    "nama" => "Dicky AL Fattah",
    "nim" => "1903332096",
    "city" => "Jakarta",
  ],
  [
    "id" => 2,
    "nama" => "Azka Faiz Ramadhan",
    "nim" => "1903332012",
    "city" => "Jakarta",
  ],
] 


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Person</title>
</head>
<body>

<ul>
  <?php foreach($persons as $person) : ?>
    <li>
      <a href="./detail.php?nama=<?= $person['nama']?>&nim=<?= $person['nim']?>&city=<?= $person['city'] ?>">
        <?= $person['nama']; ?> 
      </a> 
      <!-- <a href="./detail.php?id=<?= $person['id'] ?>">
        <?= $person['nama'] ?>
      </a> -->
    </li>
  <?php endforeach ?>
</ul>


</body>
</html>