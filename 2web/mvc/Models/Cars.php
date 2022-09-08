<?php

namespace Models;

class Cars
{
  public $brand;
  public $color;
  public $speed;

  public function __construct($brand = "Undinfined", $color = "Black", $speed = 0) {
    $this->brand = $brand;
    $this->color = $color;
    $this->speed = $speed;
  }
}