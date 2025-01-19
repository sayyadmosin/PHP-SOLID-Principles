<?php
// Open/Close Principle
// Objects or entities should be open for extension, but closed for modification.

// Define an interface for shapes with an area method
interface shapeInterface {
    public function area(): float;
}

// Implement the shapeInterface for a circle
class circle implements shapeInterface {
    private $radius;

    // Constructor to initialize the radius
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Calculate the area of the circle
    public function area(): float
    {
        return pi() * pow($this->radius, 2);
    }
}

// Implement the shapeInterface for a square
class square implements shapeInterface {
    private $length;

    // Constructor to initialize the length
    public function __construct($length)
    {
        $this->length = $length;
    }

    // Calculate the area of the square
    public function area(): float
    {
        return pow($this->length, 2);
    }
}

class AreaCalculator 
{
    
    private $shapes;

    public function __construct(shapeInterface ...$shapes)
    {
        $this->shapes = $shapes;
    }

    public function output()
    {

        foreach($this->shapes as $shape)
        {
            return $shape->area();
        }
    }
    
}

$square=new square(15);

$areasquere =new AreaCalculator($square);

echo "Area if Squre :".$areasquere->output();

$circle= new circle(15);

$areacircle =new AreaCalculator($circle);

echo "<br>";
echo "Area of circle :". $areacircle->output();

?>