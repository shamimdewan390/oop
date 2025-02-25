<?php


class dada{
    public $chele;
    public $meye;

    public function setChele($chele) {
        $this->chele = $chele;
    }

    public function getChele() {
        return $this->chele;
    }
}

$result = new dada();

$result->setChele('monsur');

echo $result->getChele();

var_dump($result instanceof dada);