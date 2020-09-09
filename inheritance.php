<?php
Class Dogs {
    var $fur_length;
    var $fur_color;
    var $eye_color;
    var $legs = 4;
    

    function dog_desc() {
        return $this->fur_color . " " . $this->fur_length . " fur and " . $this->eye_color . " eyes"; 
    }

    function legs() {
        return "Dogs have " . $this->legs . " legs."; 
    }
}

class LargeDogs extends Dogs {
    var $breed;
    var $name;
    var $age;

    function about_dog() {
        return $this->name . " is a " . $this->age . " " . $this->breed;
    }
}

$d = new LargeDogs;
$d->fur_length = 'long';
$d->fur_color = "white and black";
$d->eye_color = "blue";
$d->breed = 'Huskey';
$d->name = "Thunder";
$d->age = "2 year old";

echo $d->about_dog() . " with " . $d->dog_desc() . ".";