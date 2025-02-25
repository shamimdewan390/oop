<?php



class test{
    public static $currency;

    public function __construct()
    {
        self::$currency=20;
    }

    public static function a(){
        return self::$currency;
    }
}
// class test{
//     private $currency;

//     public function __construct()
//     {
//         $this->currency = 20;
//     }

//     public static function a() {
//         $data = new self();
//         return $data->currency;
//     }
// }

$result = new test();

// echo $result->a();

echo test::a();