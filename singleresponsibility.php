<?php
// Single Responsibility Principle
// A class should have one, and only one, reason to change.


class circle {
    private $radius;
    
    public function setredious($redious)
    {
        $this->radius = $redious;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

} 

class square 
{
 private $length;

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getArea()
    {
        return pow($this->length, 2);
    }


}

class AreaCalculator {
    
    private $shapes;

    public function __construct(...$shapes)
    {
        $this->shapes = $shapes;
    }

    public function output()
    {

        foreach($this->shapes as $shape)
        {
            if($shape instanceof circle){
                echo "Area of Circle :". $shape->getArea();
            }else if($shape instanceof square){
                echo "Area of square :". $shape->getArea();
            }
            echo "<br>";
        }
    }


    
}


$currentCircle = new circle();
$square = new square();

$currentCircle->setredious(5);
 
$square->setLength(5);

$calculateAre= new AreaCalculator($currentCircle, $square);
$calculateAre->output();    



?>