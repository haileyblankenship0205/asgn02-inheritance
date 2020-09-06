<?php
Class Dogs {
    var $fur_length ;

    function dog_fur() {
        return $this->fur_length;
    }
}

class LargeDogs extends Dogs {
    var $breed;

    function dog_desc () {
        return $this->breed;
    }
}

$d = new LargeDogs;
$d->fur_length = 'long';
$d->breed = 'Huskey';

echo $d->dog_desc() . "'s have " . $d->dog_fur() . " fur";