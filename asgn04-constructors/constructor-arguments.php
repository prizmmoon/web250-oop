<?php

class Bird
{
  public $latinName;
  public $commonName;

  public function __construct($args = [])
  {
    $this->commonName = $args["common name"] ?? NULL;
    $this->latinName = $args["latin name"] ?? NULL;
  }
}

$flycatcher = new Bird([
  "common name" => "Acadian Flycatcher",
  "latin name" => "Empidonax virescens"
]);

$wren = new Bird([
  "common name" => "Carolina Wren",
  "latin name" => "Thyrothorus ludovicianus"
]);

echo "Common name: " . $flycatcher->$commonName . "<br>";
echo "Latin name: " . $flycatcher->$latinName . "<br>";

echo "<hr>";

echo "Common name: " . $wren->$commonName . "<br>";
echo "Latin name: " . $wren->$latinName . "<br>";
