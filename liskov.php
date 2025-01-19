<?php
// liskov substitution principle
// Objects in a program should be replaceable with instances of their subtypes without altering the correctness of that program.

abstract class Animal
{
    protected $legs;
    abstract public function legs($legs);
    public function getlegs()
    {
        return $this->legs;
    }
}


class Printout{
    private $animals;
    public function __construct(Animal ...$animals)
    {
        $this->animals = $animals;
    }

    public function output()
    {
        foreach($this->animals as $animal)
        {
            $animal->legs(4);
            echo"The ".get_class($animal) ."has ". $animal->getlegs()." Legs";
            echo "<br>";
        }
    }

}


class Dog extends Animal
{
    public function legs($legs)
    {
        $this->legs = $legs;
    }
}

class Human extends Animal
{
    public function legs($legs)
    {
        $this->legs = $legs;
    }
}

class Bird extends Animal
{
    public function legs($legs)
    {
        $this->legs = $legs;
    }
}


$dog = new Dog();
$dog->legs(4);


$human = new Human();
$human->legs(2);

$bird = new Bird();
$bird->legs(2);

$Print=new Printout($dog,$human,$bird);
$Print->output();
