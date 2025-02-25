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
}

$result = new dada('monsur');
echo $result->getchele();