<?php
  require '../function.php';

  $keyword = $_GET['keyword'];

  $query = "SELECT * FROM person 
            WHERE nama LIKE '%$keyword' OR 
            age LIKE '%$keyword' OR 
            city LIKE '%$keyword'";

  $persons = query($query);
?>

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