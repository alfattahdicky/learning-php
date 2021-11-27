<?php declare(strict_types=1);
  /**
    PHP Function
    - Define PHP Function
    - Function Argument
    - Loosely Typed Language
      - automatically assosiates a data type to then variable
      - PHP 7, type declaration present with adding strict and 
        declare(strict_types=1);
    - Default Argument Value
    - Returning values
    - Return Type Declarations
    - Passing Arguments by Reference
      - use a pass-by-reference argument to update a variable
      - use keyword & before variable
   */
  // Define PHP Function
  function greeting() {
    echo "Hello World\r\n";
  }
  greeting();
  
  // Function Arguments
  function fullName($firstName, $lastName) {
    echo "$firstName $lastName\r\n";
  }
  fullName("Dicky", "Al Fattah");
  
  // Lossely Typed Language
  function addNumber(int $a, int $b) {
    echo ($a + $b)."\r\n";
  }
  addNumber(5, 10);
  // addNumber(5, '10 days'); // fatal error 
  
  // Default Argument Typed
  function place(string $city = 'Jakarta') {
    echo "$city\r\n";
  }
  place(); // Jakarta
  place('Bandung');
  
  // Returning values
  function car(string $name, string $color) {
    return "Car $name, color $color\r\n";
  }
  echo car("McLaren", "White");
  
  // Return Type Declarations
  function addDecimals(float $a, float $b) : int {
    return (int)($a + $b);
  }
  echo addDecimals(10.4, 20.35);
  
  // Passing Arguments by Reference
  function numbers(int &$num) {
    $num += 4;
  }  
  $update_number = 5;
  numbers($update_number);
  echo $update_number;
?>

