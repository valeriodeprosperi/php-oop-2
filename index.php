<?php

class shoes{
  public $brand;
}

class type extends shoes{
  public $shoeColour;
  public $shoeModel;
  public $shoeNumber;

}

$shoe1 = new type();
$shoe1->brand = "Nike";
$shoe1->shoeColour = "Black and White;
$shoe1->shoeModel = "Jordan Max Aura 2";
$shoe1->shoeNumber = "45";



$shoe2 = new type();
$shoe2->brand = "Adidas";
$shoe2->shoeColour = "Black";
$shoe2->shoeModel = "Stan Smith";
$shoe2->shoeNumber = "41";

 ?>
