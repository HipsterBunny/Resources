<?php
  # "OOP revoloves around a construct called a 'class'.  Classes are  
  # the cookie-cutters / templates that are used to define objects."

  # define your class
  Class Person {
    # classes are blueprints for objects
    # the variables inside this class are called properties
    var $name; # declaration with the var keyword is public

    public $height; # all can access (CA) public
    protected $social_insurance; # only class and derived classes CA
    private $pinn_number; # only the same class CA 

      # a class can also hold methods which should be used
      # to manipulate its OWN data and properties 

      # class constructor (called when object is created)
      function __construct($persons_name) {
        $this->name = $persons_name;
      }

      # function set_name used to set var $name to $new_name
      function set_name($new_name) { # called a setter function
        $this->name = $new_name;
      } 
     
      # function get_name will return the value in var $name
      function get_name() { # called a getter function
        # the $this-> is a self-referencing variable and 
        # points to the current object (class person)
        return $this->name;
      }
 
      # returns the 'private' value pinn_number    
      private function get_pinn_number() {
        return $this->pinn_number;
      }
  }

  class Employee extends Person {
      function __construct($employee_name) {
        $this->set_name($employee_name);
      }
      
      # examples of things you could see in an extended class
      # function set_name($new_name) {
      #   if ($new_name == "Stefan Smellypants") {
      #     $this->name = $new_name . " is smelly";
      #   }
      #   else {
      #     Person::set_name($new_name)
      #     #this will use the original set_name function from Person
      #     # can also use parent::set_name($new_name);
      #   }
      # }
  }
?>
