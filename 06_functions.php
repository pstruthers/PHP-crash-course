<?php

  $x = 10;

  function registerUser($email) {
    global $x;
    echo $x . '<br>';
    echo $email . ' registered' . '<br>';
  }

  registerUser('paige@gmail.com');

  function sum($num1, $num2) {
    return $num1 + $num2 . '<br>';
  }

  echo sum(2, 3);

  // default argument values

  function subtract($num1 = 10, $num2 = 6) {
    return $num1 - $num2 . '<br>';
  }

  echo subtract();

  // anonymous function

  $multiply = function($num1, $num2) {
    return $num1 * $num2 . '<br>';
  };

  echo $multiply(2, 3);

  $divide = fn($num1, $num2) => $num1 / $num2 . '<br>';
  
  echo $divide(10, 5);