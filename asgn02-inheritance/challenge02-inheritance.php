<?php

// Base bird class
class Bird
{
  private $name;
  private $lifespan;

  // Method to describe the bird
  protected function describe()
  {
    return "This is a {$this->name} with a lifespan of {$this->lifespan} years.<br>";
  }

  // Setter and getter for name
  public function set_name($value)
  {
    $this->name = $value;
  }

  public function get_name()
  {
    return $this->name;
  }

  // Setter and getter for lifespan
  public function set_lifespan($value)
  {
    $this->lifespan = $value;
  }

  public function get_lifespan()
  {
    return $this->lifespan;
  }
}

// Derived class for raptors

class RaptorBird extends Bird
{
  private $wingspan;

  // Setter for wingspan
  public function set_wingspan($value)
  {
    $this->wingspan = $value;
  }

  // Override the describe method
  public function describe()
  {
    return parent::describe() . "This raptor has a wingspan of {$this->wingspan} feet.<br>";
  }
}

// Derived class for flightless birds

class FlightlessBird extends Bird
{
  private $runningSpeed;

  // Setter for running speed
  public function set_runningSpeed($value)
  {
    $this->runningSpeed = $value;
  }

  // Override the describe method
  public function describe()
  {
    return parent::describe() . "This flightless bird can run at {$this->runningSpeed} MPH!<br>";
  }
}

// Usage examples (instanced objects)

// Raptor objects
$falcon = new RaptorBird();
$falcon->set_name("Falcon");
$falcon->set_lifespan(10);
$falcon->set_wingspan(3.5);

$owl = new RaptorBird();
$owl->set_name("Owl");
$owl->set_lifespan(15);
$owl->set_wingspan(4.6);

// Flightless bird objects
$ostrich = new FlightlessBird();
$ostrich->set_name("Ostrich");
$ostrich->set_lifespan(50);
$ostrich->set_runningSpeed(40);

$penguin = new FlightlessBird();
$penguin->set_name("Penguin");
$penguin->set_lifespan(20);
$penguin->set_runningSpeed(2);

// Display the descriptions
echo $falcon->describe() . "<br>";
echo $owl->describe() . "<br>";
echo $ostrich->describe() . "<br>";
echo $penguin->describe() . "<br>";
