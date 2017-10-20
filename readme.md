# PHP DESIGN PATTERNS
Variours design patterns and how to implement them in php.  
An aggreed upon solution  or a  well defined way to solve a problem.


## Singleton 
Known as a grand parent of all design patterns. A problem that a singleton solves is that it allows 
one and only one instance of a class in your project.  

Make sure that you have only one instance of the class.

```php

class Database
{
    public static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        //Lazy initialization
        if (!isset(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}

$db = Database::getInstance();
$obj = Database::getInstance();
var_dump($db);//object(Database)#1 (0) { }
var_dump($obj);//object(Database)#1 (0) { }
```



## Factory Pattern
In this pattern, a class simply creates the object you want to use.
One of the most commonly used design patterns is the factory pattern.

```php

class Automobile
{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

class FactoryPattern
{
    public function getInstance($make, $model)
    {
        return new Automobile($make, $model);
    }
}

$factory = new FactoryPattern();
//You always call the getInstance method and pass the class Name
$obj = $factory->getInstance('Bugatti', 'Veyron');
echo "<pre>";
var_dump($obj->getMakeAndModel());
```
There are two possible benefits to building your code this way
* the first is that if you need to change, rename, or replace the Automobile class later on you can do so and you will only have to modify the code in the factory instead of every place in your project that uses the Automobile class
*  if creating the object is a complicated job you can do all of the work in the factory, instead of repeating it every time you want to create a new instance.
  
Using the factory pattern isn’t always necessary (or wise). The example code used here is so simple that a factory would simply be adding unneeded complexity.
