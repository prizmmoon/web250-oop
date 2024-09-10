<?php

// Base bicycle class
class Bicycle
{
  public static $instance_count = 0;

  public $brand;
  public $model;
  public $year;
  public $description = "Used bicycles";
  private $weight_kg = 0.0;
  protected $wheels = 2;

  // Static method that creates a class
  public static function create()
  {
    $className = get_called_class();
    $object = new $className;

    self::$instance_count++;
    return $object;
  }

  // Method for returning the brand + model + year
  public function name()
  {
    return $this->brand . " " . $this->model . " " . $this->year;
  }

  // Method for returning the wheel number
  public function wheel_details()
  {
    if ($this->wheels == 1) {
      return "It has 1 wheel. <br>";
    } else {
      return "It has {$this->wheels} wheels. <br>";
    }
  }

  // Setter for the weight in kg
  public function set_weight_kg($value)
  {
    $this->weight_kg = floatval($value);
  }

  // Getter for the weight in kg
  public function get_weight_kg()
  {
    return $this->weight_kg . " kgs";
  }

  // Creates weight in lbs out of weight in kg
  public function weight_lbs()
  {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
    return $weight_lbs . " lbs";
  }

  // Setter for weight in lbs
  public function set_weight_lbs($value)
  {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }
}

// Unicycle subclass with 1 wheel
class Unicycle extends Bicycle
{
  protected $wheels = 1;
}

$cannondale = new Bicycle;
$cannondale->brand = "Cannondale";
$cannondale->model = "Trail";
$cannondale->year = "2020";
$cannondale->set_weight_kg(13);

echo "Bicycle count: " . Bicycle::$instance_count . "<br>";
echo "Unicycle count: " . Unicycle::$instance_count . "<br>";

$bike = Bicycle::create();
$uni = Unicycle::create();

echo "Bicycle count: " . Bicycle::$instance_count . "<br>";
echo "Unicycle count: " . Unicycle::$instance_count . "<br>";
