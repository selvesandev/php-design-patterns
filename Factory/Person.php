<?php

class Rectangle
{
    public $x, $y, $z;

    public function __construct(array $data)
    {
        print_r($data);
    }

    public function draw()
    {
        echo "Drawing the rectangle";
    }
}


class FactoryPattern
{
    public function getInstance($classType)
    {
        switch ($classType) {
            case 'Rectangle':
                return new Rectangle([1, 2, 3]);
            case 'SomeOther':
                return new Square();
        }
    }
}

$factory = new FactoryPattern();
$obj = $factory->getInstance('Rectangle');
echo "<pre>";
var_dump($obj);