<?php

  $string = 'Hello World';

  // Get length of string
  echo strlen($string);

  echo '<br>';

  // Find position of first occurence of a substring within a string
  echo strpos($string, 'o');

  echo '<br>';

  // Find position of last occurence of a substring within a string
  echo strrpos($string, 'o');

  echo '<br>';

  // Reverse string
  echo strrev($string);

  echo '<br>';

  // Convert all characters to lowercase
  echo strtolower($string);

  echo '<br>';

  // Convert all characters to uppercase
  echo strtoupper($string);

  echo '<br>';

  // Uppercase first character of each word
  echo ucwords($string);

  echo '<br>';

  // Replace string
  echo str_replace('World', 'Everyone', $string);

  echo '<br>';

  // Return portion of a string specified by the offset and length
  echo substr($string, 0, 5);
  echo substr($string, 5);

  echo '<br>';

  // Starts with
  if (str_starts_with($string, 'Hello')) {
    echo 'YES';
  }

  echo '<br>';

  // Ends with
  if (str_ends_with($string, 'ld')) {
    echo 'YES';
  }

  echo '<br>';

  // Other functions
  $string2 = '<h1>Hello</h1>';
  echo htmlspecialchars($string2);

  echo '<br>';

  printf('%s likes to %s', 'Paige', 'code');
  echo '<br>';
  printf('1 + 1 = %d', 1 + 1);
  echo '<br>';