<?php  
//interface segregation principle
//A client should never be forced to implement an interface that it doesn't use or clients shouldn't be forced to depend on methods they do not use.

interface canFly
{
    public function fly();
}

interface canSwim
{
    public function swim();
}
interface canRun
{
    public function run();
}

class Bird implements canFly
{
    public function fly()
    {
        echo "Bird is flying";
    }
}

class Fish implements canSwim
{
    public function swim()
    {
        echo "Fish is swimming";
    }
}

class Dog implements canRun
{
    public function run()
    {
        echo "Dog is running";
    }
}

class Duck implements canFly, canSwim
{
    public function fly()
    {
        echo "Duck is flying";
    }

    public function swim()
    {
        echo "Duck is swimming";
    }
}


$bird = new Bird();
$bird->fly();
echo "<br>";

$duck = new Duck();
$duck->fly();
echo "<br>";
$duck->swim();
echo "<br>";
$dog = new Dog();
$dog->run();
echo "<br>";
