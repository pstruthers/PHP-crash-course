<?php
/* ------- PHP Data Types ------- */
/*
  - String      Series of characters surrounded by quotes
  - Integer     Whole numbers
  - Float       Decimal numbers
  - Boolean     True or false
  - Array       Special variable which can hold multiple values
  - Object      A class
  - NULL        Empty variable
  - Resource    Special variable that holds a resource
*/

/* ------- Variable Rules ------- */
/*
  - Variables must be prefixed with $
  - Variables must start with a letter or underscore
  - Variables cannot start with a number
  - Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, _)
  - Variables are case-sensitive ($name is different than $NAME)
*/

$name = "Paige";
$age = 23;
$is_adult = true;

echo $name, $age;
var_dump($is_adult);

echo $name . ' is ' . $age . ' years old';
echo "$name is $age years old";

$x = '5' + '5';
var_dump($x);
echo 10 - 5;

/* ------- Constants ------- */
define('HOST', 'localhost');
define('DB_NAME', 'mysql_db');

echo HOST, DB_NAME;