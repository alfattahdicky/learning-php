<?php
  session_start();

  if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
  }

  require('function.php');
  // Pagination
  $totalDataPage = 2;
  $totalData = count(query("SELECT * FROM person"));
  $totalPage = ceil($totalData / $totalDataPage);
  // if(isset($_GET['page'])) {
  //   $pageActive = $_GET['page'];
  // } else {
  //   $pageActive = 1;
  // }

  $pageActive = (isset($_GET['page'])) ? $_GET['page'] : 1;
  $firstData = ($totalPage * $pageActive) - $pageActive;
  
  $persons = query("SELECT * FROM person LIMIT $firstData, $totalDataPage");

  if(isset($_POST['keyword'])) {
    $persons = query(searchQuery());
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

  <!-- Navigasi -->

  <?php if($pageActive > 1) : ?>
    <a href="?page=<?= $pageActive - 1 ?>">&lt;</a>
  <?php endif;?>

  <?php for($i = 1; $i <= $totalPage; $i++) : ?>
    <?php if($i == $pageActive) : ?>
      <a href="?page=<?= $i ?>" style="font-weight: bold; color
      blue" ><?= $i ?></a>
      <?php else : ?>
        <a href="?page=<?= $i ?>"><?= $i ?></a>
    <?php endif; ?>
  <?php endfor; ?>

  <?php if($pageActive < $totalPage) : ?>
    <a href="?page=<?= $pageActive + 1 ?>">&gt;</a>
  <?php endif;?>

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