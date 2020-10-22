<?php

class Person {

    public $id;

    public $name;

    public $online = false;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function is($otherPerson)
    {
        return $this->id == $otherPerson->id;
    }
}

$luis = new Person('Luis');
$luis->id=1;
$luis->online = true;

$luis2 = new Person('Luis');
$luis2->id=2;

if ($luis->is($luis2)){
    echo "Verdadero";
} else {
    echo "Falso";
}
