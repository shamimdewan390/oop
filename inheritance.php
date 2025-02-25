<?php


class dada{
    public $chele;
    public $meye;

    public function __construct($chele) {
        $this->chele = $chele;
    }

    public function getchele() {
        return $this->chele;
    }

    public function test($data) {
        return 'hellp' . $data;
    }
}


class chele extends dada{

}

$result = new chele('aaaaaaaaa');

// echo $result->getchele();

echo $result->test('bbbbbbbb');

