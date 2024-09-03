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
    return "It has {$this->wheels} wheels";
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
