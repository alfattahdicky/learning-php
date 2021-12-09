<?php
  session_start();

  if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
  }

  require('function.php');
  $persons = query('SELECT * FROM person');

  if(isset($_POST['keyword'])) {
    $persons = searchQuery();
  }

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
  <a href="logout.php">Logout</a>

  <h1>Daftar Orang</h1>  

  <a href="tambah.php">Tambah Data Person</a>
  <br><br>

  <form action="" method="POST">
    <label for="search">Cari</label>
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword">
    <button type="submit" name="search">Search</button>
  </form>

  <br><br>
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
        <a href="ubah.php?id=<?= $person['id']; ?>">Ubah</a> |
        <a href="hapus.php?id=<?= $person['id']; ?> " onclick="return confirm('Yakin Dihapus?')">Hapus</a>
      </td>
      <td><img src="img/<?= $person['gambar'] ?>" alt="" width="100"></td>
      <td> <?= $person['nama'] ?> </td>
      <td> <?= $person['age'] ?> </td>
      <td> <?= $person['city'] ?> </td>
    </tr>
    <?php $count++ ?>
    <?php endforeach ?>

  </table>

</body>
</html>