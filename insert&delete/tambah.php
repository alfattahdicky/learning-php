<?php
  require 'function.php';

  if(isset($_POST['submit'])) {
    // Check added data success or failed
    if(addQuery() > 0) {
      echo '
        <script>
          alert(\'Data berhasil ditambahkan\');
          document.location.href = \'index.php\';
        </script>
      ';
    } else {
      echo '
        <script>
          alert(\'Data gagal ditambahkan\');
          document.location.href = \'index.php\';
        </script>
      ';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Person</title>
</head>
<body>
  <h1>Tambah Data Person</h1>  

  <form action="" method="POST">
    <ul>
      <li>
        <label for="image">Gambar</label>
        <input type="text" name="image" id="image">
      </li>
      <li>
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" required>
      </li>
      <li>
        <label for="age">Umur</label>
        <input type="text" name="age" id="age" required>
      </li>
      <li>
        <label for="city">Kota</label>
        <input type="text" name="city" id="city" required>
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data</button>
      </li>
    </ul>
  </form>

</body>
</html>