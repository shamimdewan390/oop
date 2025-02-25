<?php



abstract class shamim{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function dewan();
    abstract public function ahamad();
}

class Car extends shamim{
    public function dewan() {
        return 'ok' . $this->name;
    }
    public function ahamad() {
        
    }
}

$result = new Car('shamim');
echo $result->dewan();