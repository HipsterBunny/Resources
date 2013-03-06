<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>OOP in PHP</title>
  <?php 
    include("class_lib.php"); 
    # "Classes are the blueprints/templates of php objects. Classes     # don't actually become objects until you do something called: 
    # instantiation.
  ?>
</head>
<body>
  <?php
    # an object is created from class/blueprint Person
    $emely = new Person("");
    $anton = new Person("");
    $larry = new Person("Larry Needlemeyer");
    
    # create person of class Employee (which extends Person)
    $eunis = new Employee("Eunis Laflure");  
 
    # set data in objects via setter method
    $emely->set_name("Emely Crue");
    $anton->set_name("Anton Pavoycheck");

    # access the object properties with the getter method
    echo "<p>Emely's full name: " . $emely->get_name();
    echo "</p>";
    echo "<p>Anton's full name: " . $anton->get_name();
    echo "</p>";
    echo "<p>Larry's full name: " . $larry->get_name();
    echo "</p>";
    echo "<p>Eunis'  full name: " . $eunis->get_name();
    echo "</p>";
                       # tutorial tells me to get a beer. Okay.

  ?>
</body>
</html>
