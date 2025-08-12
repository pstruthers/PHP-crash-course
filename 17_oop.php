<?php
  /* ------- Object-Oriented Programming ------- */

  /*
    From PHP5 onwards you can write PHP in either a procedural or object-oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
  */

  class User {
    // Properties are attributes that belong to a class

    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password) {
      $this->name = $name;
      $this->email = $email;
      $this->password = $password;
    }

    // A method is a function that belongs to a class
    function set_name($name) {
      $this->name = $name;
    }

    function get_name() {
      return $this->name;
    }
  }

  // Instantiate a user object
  $user1 = new User('Paige', 'paige@gmail.com', 'ald284');
  $user2 = new User('John', 'john@gmail.com', '2340dsf');

  echo $user1->email;
  echo $user2->name;

  // $user1->set_name('Paige');

  // echo $user1->get_name();

  // Inheritance
  class Employee extends User {
    private $title;
    private $company;

    public function __construct($name, $email, $password, $title, $company) {
      parent::__construct($name, $email, $password);
      $this->title = $title;
      $this->company = $company;
    }

    public function get_title() {
      return $this->title;
    }

    public function get_company() {
      return $this->company;
    }
  }

  $employee1 = new Employee('Sarah', 'sarah@gmail.com', '235asp9f', 'Manager', 'Walmart');

  echo $employee1->get_title();
  echo $employee1->get_company();