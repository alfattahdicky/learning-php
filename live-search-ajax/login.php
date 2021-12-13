 <?php
  session_start();
  require 'function.php';

  if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    // if($_COOKIE['login'] == 'true') {
    //   $_SESSION['login'] = true;
    // }
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $row = mysqli_query($db, "SELECT username FROM users WHERE id = $id");

    $result = mysqli_fetch_assoc($row);

    if($key === hash('sha384', $result['username'])) {
      $_SESSION['login'] = true;
    }


  }

  if(isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
  }



  if(isset($_POST['login'])) {
    // login();
    if(login()) {
      $_SESSION["login"] = true;

      $username = $_POST['username'];
      $result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");

      // Check Remember
      if(isset($_POST['remember'])) {

        $row = mysqli_fetch_assoc($result);

        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha384', $row['username']), time() + 60);

      }


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
    label:not(label:last-child) {
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
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label>
      </li>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
    </ul>
  </form>
</body>
</html>