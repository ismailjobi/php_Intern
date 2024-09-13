<?php
// Base class Shape
class Shape {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Derived class Circle
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        parent::__construct("Circle");
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Derived class Rectangle
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        parent::__construct("Rectangle");
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

// Usage
$circle = new Circle(5);
echo "The area of the " . $circle->getName() . " is: " . $circle->getArea() . "\n";

$rectangle = new Rectangle(10, 5);
echo "The area of the " . $rectangle->getName() . " is: " . $rectangle->getArea() . "\n";

?>;
