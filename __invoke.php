<?php



class calculation
{

    public $a;
    public $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function sum()
    {
        return $this->a + $this->b;
    }

    // class er object k function banaile auto call hoe __invoke method
    public function __invoke()
    {
        return $this->a + $this->b;
    }
}

$object = new calculation(10, 20);
// echo $object->sum();

echo $object(); // akhane instance k funtion banano

