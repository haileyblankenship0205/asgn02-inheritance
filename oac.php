<?php
Class Dogs {
    public $fur_length;
    public $fur_color;
    public $eye_color;
    private $legs = 4;
    

    public function dog_desc() {
        return $this->fur_color . " " . $this->fur_length . " fur and " . $this->eye_color . " eyes"; 
    }

    public function legs() {
        return "Dogs have " . $this->legs . " legs."; 
    }
}

class LargeDogs extends Dogs {
    public $breed;
    public $name;
    public $age;

    public function about_dog() {
        return $this->name . " is a " . $this->age . " " . $this->breed;
    }
}

class SmallDogs extends LargeDogs {
}

$d = new LargeDogs;
$d->fur_length = 'long';
$d->fur_color = "white and black";
$d->eye_color = "blue";
$d->breed = 'Huskey';
$d->name = "Thunder";
$d->age = "2 year old";

$s = new SmallDogs;
$s->fur_length = 'short';
$s->fur_color = "brown";
$s->eye_color = "brown";
$s->breed = 'Chihuahua';
$s->name = "Sophie";
$s->age = "5 year old";

echo $d->about_dog() . " with " . $d->dog_desc() . ".<br />";
echo $s->about_dog() . " with " . $s->dog_desc() . ".<br />";
echo $d->legs();