<?php
  if(isset($_POST['submit'])) {
    if($_POST['username'] == "admin" && $_POST['password'] == "12345") {
      // Redirect admin.php
      header('Location: admin.php');
    } else {
      // send error message
      $error = true;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
<h1>Login</h1>

<?php if(isset($error)) : ?>
  <p style="color: red;">Username/ Password Salah</p>
<?php endif?>

<ul>
  <form action="" method="POST">
    <li>
      <label for="username">Username :</label>
      <input type="text" name="username" id="username">
    </li>
    <br>
    <li>
      <label for="username">Password :</label>
      <input type="password" name="password" id="username">
    </li>
    <br>
    <li>
      <button type="submit" name="submit">Login</button>
    </li>
  </form>
</ul>


</body>
</html>