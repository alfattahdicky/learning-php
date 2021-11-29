<?php 
  // Koneksi di baris pertama ke db
  $db = mysqli_connect("localhost", "root", "", "phpdasar");

  // Get/query tabel person
  
  function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];

    while($data = mysqli_fetch_assoc($result)) {
      $rows[] = $data;
    }

    return $rows;
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