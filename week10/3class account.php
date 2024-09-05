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
echo $sazzad->getBalance();
// $sazzad->withdrow(50000);
echo PHP_EOL;
$sazzad->salaary=100000;
$sazzad->withdrow(500);
echo $sazzad->getBalance();