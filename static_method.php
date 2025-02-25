<?php

class domain{
    public $currency;
    public function __construct()
    {
        $this->currency = 20;
    }
}


class w3s extends domain{

    public function __construct()
    {
        parent::__construct();
        echo $this->currency;
    }

    // public function FunctionName() {
    //     return $this->currency;
    // }


}

$result = new w3s();
// echo $result->FunctionName();