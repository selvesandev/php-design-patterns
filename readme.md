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