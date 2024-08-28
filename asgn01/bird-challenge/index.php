<?php

class Bird
{
  var $commonName;
  var $food = "bugs";
  var $nestPlacement = "tree";
  var $conservationLevel;

  function song($value)
  {
    echo "Song: " . $value . "<br>";
  }

  function canFly($value)
  {
    echo "Can Fly: " . $value . "<br>";
  }

  function displayDetails()
  {
    echo "About this Bird:<br>";
    echo "Common Name: " . $this->commonName . "<br>";
    echo "Favorite Food: " . $this->food . "<br>";
    echo "Nest Placement: " . $this->nestPlacement . "<br>";
    echo "Conservation Level: " . $this->conservationLevel . "<br>";
  }
}

$bird1 = new Bird;
$bird1->commonName = "Eastern Towhee";
$bird1->food = "Seeds, fruits, insects, spiders";
$bird1->nestPlacement = "Ground";
$bird1->conservationLevel = "Low";

$bird2 = new Bird;
$bird2->commonName = "Indigo Bunting";
$bird2->food = "Small seeds, berries, buds, and insects.";
$bird2->nestPlacement = "Roadsides, and railroad rights-of-way, fields and on the edges.";
$bird2->conservationLevel = "Low";

$bird1->displayDetails();
$bird1->song("Drink-your-tea!");
$bird1->canFly("This bird can fly");
echo "<br>";

$bird2->displayDetails();
$bird2->song("Whatwhat!!");
$bird2->canFly("This bird can fly");
echo "<br>";
