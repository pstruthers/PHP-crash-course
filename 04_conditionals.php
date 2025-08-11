<?php

  /* ------- Operators ------- */

  /*
    <       Less than
    >       Greater than
    <=      Less than or equal to
    >=      Greater than or equal to
    ==      Equal to
    ===     Identical to
    !=      Not equal to
    !==     Not identical to
  */

  /* ------- If Statements ------- */
  
  /*
    ** If Statement Syntax
    if (condition) {
      // code to be executed if condition is true
    }
  */

  $age = 20;

  if ($age >= 18) {
    echo 'You are old enough to vote';
  } else {
    echo 'Sorry, you are not old enough to vote';
  }

  $t = date("G");

  echo $t;

  if ($t < 12) {
    echo 'Good Morning';
  } else if ($t < 18) {
    echo 'Good Afternoon';
  } else {
    echo 'Good Evening';
  }

  if (true) {
    echo 123;
  }

  $posts = ['First Post'];

  if (!empty($posts)) {
    echo $posts[0];
  } else {
    echo "No posts.";
  }

  // Ternary operator
  
  echo !empty($posts) ? $posts[0] : "No posts.";

  echo $posts[0] ?? null;

  /* ------- Switches ------- */

  $favcolor = 'blue';

  switch($favcolor) {
    case 'red':
      echo 'Your favorite color is red';
      break;
    case 'blue':
      echo 'Your favorite color is blue';
      break;
    case 'green':
      echo 'Your favorite color is green';
      break;
    default:
      echo 'Your favorite color is not red, blue, or green';
  }