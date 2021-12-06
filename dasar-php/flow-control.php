<?php

// Conditional Statement
  $x = 30;
  if($x > 20) {
    echo "greater than 20\r\n";
  } elseif ($x < 15) {
    echo 'less than 15';
  } else {
    echo 'value is 30';
  }
  
  // Switch
  $car = 'McLaren';
  switch($car){
    case 'Lamborgini':
      echo 'Your car is Lamborgini';
      break;
    case 'Toyota':
      echo 'Your car is Toyota';
      break;
    default:
      echo "Your name car is merk high level\r\n";
  }
  
  // Loop 
    // while loop
    $a = 0;
    while($a <= 6) {
      echo "Number is $a\r\n";
      $a++;
    }
    // Do While Loop
    $b = 1;
    do{
      echo "Number is $b\r\n";
      $b++;
    }while($b <= 5);
    // For Loop'
    for($i = 0; $i <= 5; $i++) {
        echo "Number For Loop $i\r\n";
    }
    // foreach for array
    $arr = array('dicky', 'azka', 'diaz');
    foreach($arr as $val) {
      echo "$val\r\n";
    }
    // Break & continue
      // Break => jump out loop
      for($i = 0; $i <= 8; $i++) {
        if($i == 5) {
          break;
        }    
        echo "Print a Number $i\r\n";
      }
      // Continue => skip one iteration
      for($i = 0; $i <=5; $i++) {
        if($i === 2) {
          continue;
        }
        echo "Continue Number $i\r\n";
      }
    
?>

