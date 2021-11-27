<?php
  
  /**
    Array
      - Array is special variable, which can hold more than one value at a Runtime
      - Get length of array use count()
      - Create Array
        - Indexed Arrays
            - Have index and start at 0
            - index can be assign automatically or assign manuall
        - Associative Arrays
            - use keys and value with "=>"
        - Multidimensional Array
            - array containing one or more Arrays
            - for two-dimensional array need two indices to select an element
                - two indices (row and column)
   */
    
    // Array is special variable
    $name = array('dicky', 'azka', 'diaz');
    
    // Get Length of array
    $counting = count($name) - 1;
    // echo $counting;
    
    // Indexed array
    $place = array('jakarta', 'bandung', 'bogor');
    $place[3] = "Depok";
    // echo $place[3];
    
    // loop through an indexed array
    // for($i = 0; $i < count($place); $i++) {
    //   // echo $place[$i];
    //   // echo '\b';
    // }
    
    // PHP Associative Arrays
    $age = array("Dicky"=> 20, "Azka" => 17, "Diaz" => 18);
    // echo "Dicky is". $age['Dicky'];
    
    // foreach($age as $key => $value) {
    //   // echo "Key=". $key. ", Value=". $value;
    // }
  
    // Multidimensional array
    $food = array(
      array('katsu', 4),
      array('akila', 6),
      array('lontong', 10),
    );
    
    for($row = 0; $row < count($food); $row++) {
      // echo $i;
      for($column = 0; $column < 2; $column++) {
        echo $food[$row][$column];
      }
    };
    
?>