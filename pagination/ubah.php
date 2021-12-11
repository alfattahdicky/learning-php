<?php
  session_start();

  if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
  }
  
  require 'function.php';

  // Get data url 
  $id = $_GET['id'];

  // Query Data Person based on id 
  // result array numeric
  $person = query("SELECT * FROM person WHERE id = $id")[0];
  

  if(isset($_POST['submit'])) {
    // Check added data update or failed
    if(updateQuery($id) > 0) {
      echo '
        <script>
          alert(\'Data berhasil diubah\');
          document.location.href = \'index.php\';
        </script>
      ';
    } else {
      echo '
        <script>
          alert(\'Data gagal diubah\');
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
  <title>Update Data Person</title>
</head>
<body>
  <h1>Update Data Person</h1>  

  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="image">Gambar</label> <br>
        <img src="img/<?= $person['gambar'] ?>" alt="" width="100"> <br>
        <input type="file" name="image" id="image">
      </li>
      <li>
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" value="<?= $person['nama'] ?>" required>
      </li>
      <li>
        <label for="age">Umur</label>
        <input type="text" name="age" id="age" value="<?= $person['age'] ?>" required>
      </li>
      <li>
        <label for="city">Kota</label>
        <input type="text" name="city" id="city" value="<?= $person['city'] ?>" required>
      </li>
      <li>
        <button type="submit" name="submit">Update Data</button>
      </li>
    </ul>
  </form>

</body>
</html>