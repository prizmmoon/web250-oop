<?php

class Bird
{
  public $latinName;
  public $commonName;

  public function __construct($args = [])
  {
    $this->commonName = $args["commonName"] ?? NULL;
    $this->latinName = $args["latinName"] ?? NULL;
  }
}

$flycatcher = new Bird([
  "commonName" => "Acadian Flycatcher",
  "latinName" => "Empidonax virescens"
]);

$wren = new Bird([
  "commonName" => "Carolina Wren",
  "latinName" => "Thyrothorus ludovicianus"
]);

echo "Common name: " . $flycatcher->commonName . "<br>";
echo "Latin name: " . $flycatcher->latinName . "<br>";

echo "<hr>";

echo "Common name: " . $wren->commonName . "<br>";
echo "Latin name: " . $wren->latinName . "<br>";
