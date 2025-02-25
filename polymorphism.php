<?php

abstract class Aminal{
    abstract public function makeSound();

    public function describe() {
        return 'this is an animal';
    }
}

class Dog extends Aminal{
    public function makeSound()
    {
     return 'gaw gae';   
    }

    public function describe()
    {
        return 'this is a dog';    
    }
    
}
class Cat extends Aminal{
    public function makeSound()
    {
     return 'miaw miaw';   
    }

    public function describe()
    {
        return 'this is a cat';    
    }
    
}

function animalSound(Aminal $animal) {

    echo $animal->makeSound() . "\n";
    echo $animal->describe(). "\n";
    
}

$dog = new Dog();
$cat = new Cat();

animalSound($dog);
animalSound($dog);

echo $dog->makeSound();