<?php
  require 'function.php';
  $persons = query('SELECT * FROM person');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>
<body>
  <h1>Daftar Orang</h1>  

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Kota</th>
    </tr>
    
    <?php $count = 1;?>
    <?php foreach($persons as $person) : ?>
    <tr>
      <td> <?= $count ?> </td>
      <td>
        <a href="">Ubah</a> |
        <a href="">Hapus</a>
      </td>
      <td><img src="img/<?= $person['gambar'] ?>" alt="" width="50"></td>
      <td> <?= $person['nama'] ?> </td>
      <td> <?= $person['age'] ?> </td>
      <td> <?= $person['city'] ?> </td>
    </tr>
    <?php $count++ ?>
    <?php endforeach ?>

  </table>

</body>
</html>