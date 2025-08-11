<?php

  $fruits = ['apple', 'orange', 'banana'];

  // Get length of array
  echo count($fruits);

  // Search an array for a value
  var_dump(in_array('apple', $fruits));

  // Add to end of array
  $fruits[] = 'grape';
  array_push($fruits, 'strawberry', 'watermelon');

  // Add to beginning of array
  array_unshift($fruits, 'pineapple');

  // Remove from end of array
  array_pop($fruits);

  // Remove from beginning of array
  array_shift($fruits);

  // Remove specific element from array
  unset($fruits[2]);

  // Split array into chunks of 2
  $chunked_array = array_chunk($fruits, 2);

  print_r($chunked_array);

  print_r($fruits);

  // Merge/concatenate arrays
  $arr1 = [1,2,3];
  $arr2 = [4,5,6];

  $arr3 = array_merge($arr1, $arr2);
  $arr4 = [...$arr1, ...$arr2];

  print_r($arr3);
  print_r($arr4);

  // Combine arrays into key/value pairs
  $a = ['green', 'red', 'yellow'];
  $b = ['avocado', 'apple', 'banana'];

  $c = array_combine($a, $b);

  print_r($c);

  $keys = array_keys($c);
  print_r($keys);

  // Swap keys/values
  $flipped = array_flip($c);
  print_r($flipped);

  // Array range
  $numbers = range(1, 10);

  print_r($numbers);

  // Array map
  $new_numbers = array_map(function($number) {
    return "Number $number";
  }, $numbers);

  print_r($new_numbers);

  // Filter array
  $filtered_array = array_filter($numbers, fn($number) => $number <= 5);

  print_r($filtered_array);

  // Reduce
  $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

  var_dump($sum);