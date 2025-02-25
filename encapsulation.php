<?php


class BankAccount{
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }
    public function getBalance() {
        return $this->balance;
    }


    public function addBalance($amount) {
        if($amount > 0 ){
            $this->balance += $amount;
            return true;
        }
    }

    public function withdraw($amount) {
        if($amount > 0 && $amount <= $this->balance){
            $this->balance -= $amount;
            return true;
        }
        return 'besi taka dicen';
    }


}


$account = new BankAccount('1234566', 500);

echo $account->getAccountNumber() . "\n";
echo $account->getBalance() . "\n";
echo $account->addBalance(100) . "\n";
echo $account->getBalance() . "\n";
echo $account->withdraw(2000) . "\n";
echo $account->getBalance() . "\n";


