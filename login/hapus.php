<?php

require 'function.php';

// Get ID will deleted
 $id = $_GET['id'];
 
 if(deleteQuery($id) > 0) {
  echo '
      <script>
        alert(\'Data berhasil dihapus\');
        document.location.href = \'index.php\';
      </script>
  ';
 }else {
  echo '
      <script>
        alert(\'Data gagal dihapus\');
        document.location.href = \'index.php\';
      </script>
  ';
 }

?>