<?php 
  // Koneksi di baris pertama ke db
  $db = mysqli_connect("localhost", "root", "", "phpdasar");

  // Get/query data tabel person
  function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];

    while($data = mysqli_fetch_assoc($result)) {
      $rows[] = $data;
    }

    return $rows;
  } 

  function addQuery() {
    global $db;

    // Get Data Input & generate string
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $city = htmlspecialchars($_POST['city']);
    
    // upload image
    $image = uploadImage();
    if(!$image) {
      return false;
    }

    // Query Insert Data
    $query = "INSERT INTO person
              VALUES
              (NULL, '$name', '$age', '$city', '$image')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
  }

  function uploadImage() {
    
    // Get name, size, tmp & error for image
    $nameFile = $_FILES['image']['name'];
    $tmpFile = $_FILES['image']['tmp_name'];
    $sizeFile = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];

    // Check upload image empty or not
    if($error === 4) {
      echo '<script>
              alert("Silahkan isi gambar");
            </script>';
      return false;
    }

    // Get extension image
    $extensionImageValid = ['jpg', 'jpeg', 'png'];
    //  One way
    // $extensionImage = explode('.', $nameFile);
    // $extensionImage = strtolower(end($extensionImage));
    // Two way
    $extensionImage = pathinfo($nameFile, PATHINFO_EXTENSION);

    // Check image valid

    // One Way
    // for($i = 0; $i < count($extensionImageValid); $i++) {
    //   if($extensionImage !== $extensionImageValid[$i]) {
    //     echo '<script>
    //           alert("File yang anda kirim salah");
    //         </script>';
    //     return false;
    //   } else {

    //   }
    // }

    // Two Way
    if(!in_array($extensionImage, $extensionImageValid)) {
      echo '<script>
              alert("File yang anda kirim salah");
            </script>';
      return false;
    }

    // Check image size greater than 2mb
    if($sizeFile > 1000000) {
      echo '<script>
              alert("File yang anda kirim sizenya lebih dari 2Mb");
            </script>';
      return false;
    }

    // Generate new name file image
    $newNameFile = uniqid() . "." . $extensionImage;

    // Upload image to directory folder img
    move_uploaded_file($tmpFile, 'img/' . $newNameFile);

    return $newNameFile;

  }

  function deleteQuery($id) {
    global $db;
    mysqli_query($db, "DELETE FROM person WHERE id = $id");

    return mysqli_affected_rows($db);
  }

  function updateQuery($id) {
    global $db;

    // Get Data Input & generate string
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $city = htmlspecialchars($_POST['city']);
    
    $person = query("SELECT * FROM person WHERE id = $id")[0];

    if($_FILES['image']['error'] === 4) {
      $image = $person['gambar'];
    } else {
      $image = uploadImage();
    }
    
    // Query Insert Data
    $query = "UPDATE person SET 
              nama='$name', 
              age='$age',
              city='$city', 
              gambar='$image' WHERE id = $id
            ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
  }

  // Searching Query
  function searchQuery() {
    $keyword = $_POST['keyword'];

    $query = "SELECT * FROM person 
    WHERE nama LIKE '%$keyword' OR 
    age LIKE '%$keyword' OR 
    city LIKE '%$keyword'";

    return query($query);

  }


  // Create Register function

  function signUp() {
    global $db;

    $username = strtolower(stripslashes(trim($_POST['username'])));
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $passwordConfirm = mysqli_real_escape_string($db, $_POST['passwordConfirm']);

    // Check username exist or not
    $result = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
      echo "
          <script>
            alert('Username yang dimasukkan sudah ada');
          </script>
      ";
      return false;
    }

    // Check password confim 
    if($password !== $passwordConfirm) {
      echo "<script>
              alert('Password yang dimasukkan tidak sesuai');
            </script>"; 
      return false;
    }

    // Encryption Password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Insert username & password to database
    $query = "INSERT INTO users VALUES(NULL, '$username', '$password')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
  }

// Login 
  function login() {
    // session_start();
    global $db;

    $username = $_POST['username'];
    $password = $_POST['password'];

    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");
    
    // check username generate 1 if true
    if(mysqli_num_rows($result) === 1) {

      // Check Password 
      $row = mysqli_fetch_assoc($result);

      $verifyPassword = password_verify($password, $row['password']);

      var_dump($verifyPassword);


      return $verifyPassword;
    } 
  }

  // if(!$result) {
  //   echo mysqli_error($db);
  // } else {

    // Get data (fetch) variable result
    // mysqli_fetch_row() => return array numeric
    // mysqli_fetch_assoc() => return array assosiative
    // mysqli_fetch_array() => return array numeric dan associative
    // mysql_fetch_object() => return object access with $data -> nama 

    // while($fetchData = mysqli_fetch_assoc($result)) {
    //   var_dump($fetchData);
    // }

?>