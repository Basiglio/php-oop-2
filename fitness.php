<?php 

include __DIR__ . ('/tecnology.php');

class Fitness extends Tecnology {

  public $sport;

  function __construct($name, $price, $brand, $sport) {
    parent::__construct($name, $price, $brand);
    $this->sport = $sport;
  }
}

$item3 = new Fitness("Powerade", "12.99", "Coca-Cola Company", "Basket");
// var_dump($item3);