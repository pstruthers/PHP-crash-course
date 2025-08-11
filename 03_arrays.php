<?php

  // Simple Array

  $numbers = [1,44,55,22];
  $fruits = array('apple', 'orange', 'banana');

  print_r($numbers);
  var_dump($numbers);

  echo $fruits[1];

  // Associative Array

  $colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
  ];

  echo $colors[4];

  $hex = [
    'red' => '#f00',
    'blue' => '#00f',
    'green' => '#0f0'
  ];

  echo $hex['blue'];

  $person = [
    'first_name' => 'Paige',
    'last_name' => 'Struthers',
    'email' => 'paige@gmail.com',
  ];

  echo $person['first_name'];

  // 2D Array

  $people = [
    [
    'first_name' => 'Paige',
    'last_name' => 'Struthers',
    'email' => 'paige@gmail.com',
    ],
    [
    'first_name' => 'John',
    'last_name' => 'Smith',
    'email' => 'john@gmail.com',
    ],
    [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
    ],
  ];

  echo $people[1]['email'];

  var_dump(json_encode($people)); // Converts to JSON