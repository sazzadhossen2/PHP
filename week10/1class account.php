<?php

class Account{
    public $accountNUmber;
    public $salaary;

    function __construct($accountNUmber,$salaary){
        $this->accountNUmber=$accountNUmber;
        $this->salaary=$salaary;
    }

    function getBalance(){
     return $this->salaary;
    }

    function deposit($amount){
        $this->salaary+=$amount;
    }

    function  withdrow($amount){
        if($amount>$this->salaary){
            echo "insufficient Balance";
            return;
        }
        $this->salaary-=$amount;
    }
}

$sazzad=new Account(34353443,5788);
$shamim=new Account(3333,555);

echo $sazzad->getBalance();
echo PHP_EOL;
echo $shamim->getBalance();

echo PHP_EOL;
$sazzad->deposit(40);
echo $sazzad->getBalance();

echo PHP_EOL;
$sazzad->withdrow(5828);
echo $sazzad->getBalance();