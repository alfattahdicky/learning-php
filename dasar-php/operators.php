<?php
/**
 PHP Constant
  - cannot chnaged
  - automatically global
  - name, parameter, case-sensitive (default false)
 */
 
// define
  // not case-sensitive
  define('SAYS', 'Selamat Pagi');
  echo SAYS;
  // case-sensitive
  // define('CAR', 'McLaren', true)
  // echo car;
  
  // constant array 
  define('names', ['dicky', 'azka']);
  echo names[0];
  
  // constant global
  define('place', 'jakarta');
  function callPlace() {
    echo "\r\n place";
  }
  callPlace();
  
  // PHP Operators
  // Aritmetic Operators
  $x = 5;
  $y = 4;
  // echo $x + $y;
  // echo $x - $y;
  // echo $x / $y;
  // echo $x * $y;
  // echo $x ** $y;
  // echo $x % $y;
  
  // assignment Operators
  // echo $x = $y;
  // echo $x += $y;
  // echo $x -= $y;
  // echo $x *= $y;
  // echo $x /= $y;
  // echo $x %= $y;
  
  // PHP Comparison Operators
  // echo var_dump($x == $y);
  // echo var_dump($x === $y);
  // echo var_dump($x != $y);
  // echo var_dump($x <> $y);
  // echo var_dump($x !== $y);
  // echo var_dump($x > $y);
  // echo var_dump($x < $y);
  // echo var_dump($x >= $y);
  // echo var_dump($x <= $y);
  // // -1 lebih kecil dari y, 0 sama besar, 1 lebih besar dari y
  // echo ($x <=> $y); 
  
  // Increment/Decrement Operators
  echo ++$x;
  echo $x++;
  echo --$x;
  echo $x--;
  
  // Logical Operators
  // echo var_dump($x == 10 && x == 4);
  // echo var_dump($x == 10 || x == 4);
  // echo var_dump($x == 10 and x == 4);
  // echo var_dump($x == 10 or x == 4);
  // echo var_dump($x == 10 xor x == 4);
  // echo var_dump($x !== 10);
  
  // String Operators
  $text1 = 'Hello';
  $text2 = ' World';
  echo $text1. $text2;
  echo $text1 .= $text2;
  
  // array Operators
  // $arr1 = array('a' => 'blue', 'b' => 'red');
  // $arr2 = array('c' => 'green', 'd' => 'yellow');
  // print_r($arr1 + $arr2);
  // echo var_dump($arr1 == $arr2);
  // echo var_dump($arr1 === $arr2);
  // echo var_dump($arr1 !== $arr2);
  // echo var_dump($arr1 <> $arr2);
  // echo var_dump($arr1 != $arr2);
  
  // conditional assignment 
  echo $status = (empty($user)) ? "empty" : "logged in";
  $user = 'john';
  echo $status = (empty($user)) ? "empty" : "logged in";
?>

