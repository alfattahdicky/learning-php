<?php
require 'function.php';

  if(isset($_POST['register'])) {

    if(signUp() > 0) {
      echo "<script>
            alert('User baru berhasil ditambahkan');
          </script>";
    } else {
      echo mysqli_error($db);
    }

  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Registrasi</title>
  <style>
    label {
      display: block;
    }
  </style>
</head>
<body>
  <h1>Registrasi</h1>

  <form action="" method="POST">
    <ul>
      <li>
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <label for="passwordConfirm">Konfirmasi Password : </label>
        <input type="password" name="passwordConfirm" id="passwordConfirm">
      </li>
      <li>
        <button type="submit" name="register">Register</button>
      </li>
    </ul>
    
  </form>
</body>
</html>