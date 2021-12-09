 <?php
  session_start();

  if(isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
  }

  require 'function.php';


  if(isset($_POST['login'])) {
    // login();
    if(login()) {

      $_SESSION["login"] = true;

      header("Location: index.php");
      exit;
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <style>
    label {
      display: block;
    }
  </style>
</head>
<body>
  <h1>Login</h1>
  <a href="./registrasi.php">Silahkan Register</a>
  
  <?php if(isset($err)): ?>
    
  <?php endif; ?>

  <form action="" method="POST">
    <ul>
      <li>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
    </ul>
  </form>
</body>
</html>