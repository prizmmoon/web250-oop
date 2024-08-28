<?php

class Bicycle
{
  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg;

  function name()
  {
    return $this->brand . " " . $this->model . " " . $this->year;
  }

  function weight_lbs()
  {
    return floatval($this->weight_kg) * 2.2046226218;
  }

  function set_weight_lbs($value)
  {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }
}


$cannondale = new Bicycle;
$cannondale->brand = "Cannondale";
$cannondale->model = "Trail";
$cannondale->year = "2020";
$cannondale->weight_kg = 13;

$fuji = new Bicycle;
$fuji->brand = "Fuji";
$fuji->model = "Kasane";
$fuji->year = "2022";
$fuji->weight_kg = 9;

echo $cannondale->name() . "<br>";
echo $fuji->name() . "<br>";

echo $cannondale->weight_kg . "<br>";
echo $cannondale->weight_lbs() . "<br>";

$cannondale->set_weight_lbs(2);
echo $cannondale->weight_kg . "<br>";
echo $cannondale->weight_lbs() . "<br>";
