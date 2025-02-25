<?php



interface Gari{
    
    public function dewan();
    public function hossain();
}


class riksha implements Gari{
    public function dewan() {
            return 'ok';
    }

    public function hossain() {
        
    }
}

$result = new riksha();
echo $result->dewan();