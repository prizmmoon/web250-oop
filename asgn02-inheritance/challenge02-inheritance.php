<?php

// Base bird class
class Bird
{
  public $name;
  public $lifespan;

  // Method to describe the bird
  public function describe()
  {
    return "This is a {$this->name} with a lifespan of {$this->lifespan} years";
  }
}

// Derived class for raptors

class RaptorBird extends Bird
{
  public $wingspan;

  // Override the describe method
  public function describe()
  {
    return parent::describe() . "This bird has a wingspan of {$this->wingspan} feet.";
  }
}

// Derived class for flightless birds

class FlightlessBird extends Bird
{
  public $runningSpeed;

  // Override the describe method
  public function describe()
  {
    return parent::describe() . "This bird can run at {$this->runningSpeed} MPH!";
  }
}

// Usage examples (instanced objects)

// Raptor objects
$falcon = new RaptorBird();
$falcon->name = "Falcon";
$falcon->lifespan = 10;
$falcon->wingspan = 3.5;

$owl = new RaptorBird();
$owl->name = "Owl";
$owl->lifespan = 15;
$owl->wingspan = 4.6;


// Flightless bird objects
$ostrich = new FlightlessBird();
$ostrich->name = "Ostrich";
$ostrich->lifespan = 50;
$ostrich->runningSpeed = 40;

$penguin = new FlightlessBird();
$penguin->name = "Penguin";
$penguin->lifespan = 20;
$penguin->runningSpeed = 2;
