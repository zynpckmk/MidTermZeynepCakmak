<?php
class Automobile {
  // Properties
  public $licencePlate;
  public $brand;
  public $model;
  public $modelYear;
  public $color;

  // Methods
  function __construct($licencePlate, $brand,
                  $model,$modelYear,$color) {
    $this->licencePlate = $licencePlate;
    $this->brand = $brand;
    $this->model = $model;
    $this->modelYear = $modelYear;
    $this->color = $color;
  }
  public function __toString()
  {
      return "Car licencePlate: " .  $this->licencePlate . "<br>Car brand: " . $this->brand 
      "<br>Car model: " .  $this->model . "<br>Car modelYear: " . $this->modelYear . "<br>Car color: " . $this->color;
    }

}
?>