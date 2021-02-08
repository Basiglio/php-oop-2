<?php 

include __DIR__ . ('/Item.php');



class Tecnology extends Item {
  public $brand;


  function __construct($name, $price, $brand) {
    parent::__construct($name, $price);
    $this->brand = $brand;
  }
}

$item2 = new Tecnology("iPhone", "849.99", "Apple");
