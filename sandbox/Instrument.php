<?php

class Instrument
{
  // Properties (descriptors)
  var $name;
  var $type;
  var $brand;
  var $price;

  // Constructor
  // public function __construct($name, $type, $brand, $price)
  // {
  //   $this->name = $name;
  //   $this->type = $type;
  //   $this->brand = $brand;
  //   $this->price = $price;
  // }

  // Methods
  // Kevin will call this var for now
  public function displayDetails()
  {
    echo "Instrument Details<br>";
    echo "Name: " . $this->name . "<br>";
    echo "Type: " . $this->type . "<br>";
    echo "Brand: " . $this->type . "<br>";
    echo "Price: " . $this->price . "<br>";
  }
}

// Instantiate a new instance
// Create an object

// $guitar = new Instrument("Guitar", "Acoustic", "Martin", 1000.00);
// $guitar->displayDetails();

// $guitar2 = new Instrument("Guitar", "Electric", "Fender", 1000.00);
// $guitar2->displayDetails();

$guitar = new Instrument;

$guitar->name = "Guitar";
$guitar->type = "Acoustic";
$guitar->brand = "Alvarez";
$guitar->price = 900;
echo "<br>";

$guitar->displayDetails();

$accordion = new Instrument;

$accordion->name = "Accordion";
$accordion->type = "Piano key";
$accordion->brand = "Titano";
$accordion->price = 1100;
echo "<br>";

$accordion->displayDetails();
