<?php
  // Salam pagi syntax php
  $greetings = "Selamat Pagi";
  // echo $greetings .' dicky';
  
  // # Calculate
  $x = 5 /* + 5 */ * 5;
  // echo $x
  
  //  Variables
  $name_hello = "Hallo, dicky";
  $news = "Bagaimana kabar hari ini?";
  // echo "$name_hello $news\n";
  // echo $name_hello . $news;
  
  /*
    Variables Scope
    - local = hanya bisa diakses didalam function
    - global = hanya bisa diakses diluar global
    - static
  */
  
  // global
  $num_three = 3;
  
  function globalScope() {
     // call variable in inside function
    // echo "Angka 3: " . $num_three; 
  }
  // test();
  echo $num_three; // 3
  
  // local
  function localScope() {
    $say = "\nHello";
    // echo $say;
  }
  localScope();
  
  // Error call variable in outside function
  // echo $say;
  
  // Access global variable dalam function dengan keyword global
  $num_five = 5;
  $num_ten = 10;
  
  function globalKeyword() {
    global $num_five, $num_ten;
    $num_five = $num_five + $num_ten;
    echo $num_five;
  }
  globalKeyword();
  echo $num_five;
  
  // all global variables dalam array
  $num_two = 2;
  $num_one = 1;
  function allGlobal() {
    $GLOBALS['num_two'] = $GLOBALS['num_one'] + $GLOBALS['num_two'];
    echo $GLOBALS['num_two'];
  }
  allGlobal();
  
  // Static variables => we want a local variable NOT to be deleted
  function static_variables() {
    static $x = 0;
    $x++;
    print $x;
  }
  static_variables();
  static_variables();
  static_variables();
  
  
  /**
   Data Types
    - String
      - use single quote oro double quote
    - Integer
      - not have decimal point 
      - have at least one digit
    - float
      - float is number with a decimal point 
    - Boolean
      - have 2 values is true or false
    - Array
      - multiples values in one single variable
    - null
      - when have variable not assign, automatically assigned a value of NULL
   */
    
    // String
    $x = 'Hai, Dunia \r\n';
    $y = "Hai, Dunia \r\n";
    echo $x;
    echo $y;
    
    // integer
    $num_ten = 10;
    $num_nine = -9;
    echo "$num_nine \r\n";
    echo $num_ten;
    
    // float
    $decimals = 20.203;
    echo $decimals;
    
    // Boolean
    $bool_true = true;
    $bool_false = false;
    echo $bool_false;
    
    // Array
    $name = array('dicky', 'azka', 'diaz');
    echo var_dump($name);
    
    // null value
    $null_value = null;
    echo var_dump($null_value);
    
    
    
    
    
    
    
    
    
  
?>    