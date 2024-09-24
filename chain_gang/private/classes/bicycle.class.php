<?php

class Bicycle
{

  public $brand;
  public $model;
  public $year;
  public $category;
  public $color;
  public $description;
  public $gender;
  public $price;
  protected $weight_kg;
  protected $condition_id;

  public const CATEGORIES = [
    "Road",
    "Mountain",
    "Hybrid",
    "Cruiser",
    "City",
    "BMX"
  ];

  public const GENDERS = [
    "Mens",
    "Womens",
    "Unisex"
  ];

  protected const CONDITION_OPTIONS = [
    1 => "Beat Up",
    2 => "Decent",
    3 => "Good",
    4 => "Great",
    5 => "Like New"
  ];

  public function __construct()
  {
    $this->brand = $args["brand"] ?? "";
    $this->model = $args["model"] ?? "";
    $this->year = $args["year"] ?? "";
    $this->category = $args["category"] ?? "";
    $this->color = $args["color"] ?? "";
    $this->description = $args["description"] ?? "";
    $this->gender = $args["gender"] ?? "";
    $this->price = $args["price"] ?? 0;
    $this->weight_kg = $args["weight_kg"] ?? 0;
    $this->condition_id = $args["condition_id"] ?? 3;
  }
}
