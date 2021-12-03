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
    $image = htmlspecialchars($_POST['image']);
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $city = htmlspecialchars($_POST['city']);

    // Query Insert Data
    $query = "INSERT INTO person
              VALUES
              (NULL, '$name', '$age', '$city', '$image')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
  }

  function deleteQuery($id) {
    global $db;
    mysqli_query($db, "DELETE FROM person WHERE id = $id");

    return mysqli_affected_rows($db);
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