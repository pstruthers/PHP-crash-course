<?php
  define('DB_HOST', 'localhost');
  define('DB_USER', 'paige');
  define('DB_PASSWORD', '123456');
  define('DB_NAME', 'php_dev');

  // Create connection
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // Check connection
  if($conn->connect_error) {
    die('Connection Failed ' . $conn->connect_error);
  }