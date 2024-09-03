<?php

class Bicycle
{
  public $brand;
  public $model;
  public $year;
  public $description = "Used bicycles";
  private $weight_kg = 0.0;
  protected $wheels = 2;

  public function name()
  {
    return $this->brand . " " . $this->model . " " . $this->year;
  }

  public function wheel_details()
  {
    if ($this->wheels == 1) {
      return "It has 1 wheel. <br>";
    } else {
      return "It has {$this->wheels} wheels. <br>";
    }
  }

  public function set_weight_kg($value)
  {
    $this->weight_kg = floatval($value);
  }

  public function get_weight_kg()
  {
    return $this->weight_kg . " kgs";
  }

  public function weight_lbs()
  {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
    return $weight_lbs . " lbs";
  }

  public function set_weight_lbs($value)
  {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }
}

class Unicycle extends Bicycle
{
  protected $wheels = 1;
}

$cannondale = new Bicycle;
$cannondale->brand = "Cannondale";
$cannondale->model = "Trail";
$cannondale->year = "2020";
$cannondale->set_weight_kg(13);

$fuji = new Bicycle;
$fuji->brand = "Fuji";
$fuji->model = "Kasane";
$fuji->year = "2022";
$fuji->set_weight_kg(9);

$nimbus = new Unicycle;
$nimbus->brand = "Nimbus";
$nimbus->model = "Hatchet";
$nimbus->year = "2022";
$nimbus->set_weight_kg(16);

echo $cannondale->name() . "<br>";
echo $cannondale->get_weight_kg() . "<br>";
echo $cannondale->weight_lbs() . "<br>";
echo $cannondale->wheel_details() . "<br>";

echo $fuji->name() . "<br>";
echo $fuji->get_weight_kg() . "<br>";
echo $fuji->weight_lbs() . "<br>";
echo $fuji->wheel_details() . "<br>";

echo $nimbus->name() . "<br>";
echo $nimbus->get_weight_kg() . "<br>";
echo $nimbus->weight_lbs() . "<br>";
echo $nimbus->wheel_details() . "<br>";
