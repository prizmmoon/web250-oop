<?php

class Bird
{
  public $latinName;
  public $commonName;

  public function __construct($args = [])
  {
    $this->latinName = $args["latin name"] ?? NULL;
    $this->commonName = $args["common name"] ?? NULL;
  }
}
