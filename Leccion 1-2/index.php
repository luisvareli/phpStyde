<?php

class Person {
    protected $firstName;
    protected $lastName;
    protected $nickname;
    protected $changeNickname = 0;

    public function __construct($firstName,$lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setNickName($nickname)
    {
        if($this->changedNickname >= 2) {
            throw new Exception(
                "You cant change a nickname more than 2 times"
            );
        }

        $this->nickname = $nickname;

        $this->changeNickname++;
    }

    public function getNickName()
    {
        return $this->nickname;
    }

    public function getFullName(){
        return $this->firstName . ' ' . $this->lastName;
    }
}

$person1 = new Person('Luis','Vargas');

$person1->setNickName('Lewiis') ;
$person1->setNickName('Lewiisin') ;
$person1->setNickName('Lewiisin2') ;

exit($person1->getNickName());