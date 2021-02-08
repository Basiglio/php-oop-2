<?php 



class Item {
  public $name;
  public $price;

  function __construct($name = " ", $price = "") {

    $this->name = $name;
    $this->price = $price;
  }
}

$item = new Item("Utensile", "49.99");
// var_dump($item);