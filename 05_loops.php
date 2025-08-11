<?php

  /* ------- For Loop ------- */

  /*
    ** For Loop Syntax
    for (initialize; condition; increment) {
      // code to be executed while condition is true
    }
  */

  for($x = 1; $x <= 10; $x++) {
    echo $x . '<br>';
  }

  /* ------- While Loop ------- */

  /*
    ** While Loop Syntax
    while (condition) {
      // code to be executed while condition is true
    }
  */

  echo '<br>';

  $x = 1;

  while ($x <= 10) {
    echo $x . '<br>';
    $x++;
  }

  /* ------- Do While Loop ------- */

  /*
    ** Do While Loop Syntax
    do {
      // code to be executed
    } while (condition);

    do...while loop will always execute the block of code once, even if the condition is false
  */

  echo '<br>';

  $y = 6;

  do {
    echo $y . '<br>';
    $y++;
  } while($y <= 5);

  /* ------- Foreach Loop ------- */

  /*
    ** Foreach Loop Syntax
    foreach ($array as $value) {
      // code to be executed
    }
  */

  echo '<br>';

  $posts = ['First Post', 'Second Post', 'Third Post'];

  for($x = 0; $x < count($posts); $x++) {
    echo $posts[$x] . '<br>';
  }

  echo '<br>';

  foreach($posts as $post) {
    echo $post . '<br>';
  }

  echo '<br>';

  foreach($posts as $index => $post) {
    echo $index + 1 . ' - ' . $post . '<br>';
  }

  echo '<br>';

  $person = [
    'first_name' => 'Paige',
    'last_name' => 'Struthers',
    'email' => 'paige@gmail.com',
  ];

  foreach($person as $key => $value) {
    echo "$key - $value<br>";
  }