<?php
  # "OOP revoloves around a construct called a 'class'.  Classes are  # the cookie-cutters / templates that are used to define objects."

  # define your class
  Class Person {
    # classes are blueprints for objects
    # the variables inside this class are called properties
    var $name;

    # a class can also hold methods which should be used
    # to manipulate its OWN data and properties 

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
  }
?>
