<?php

interface AccountInterface{
    function __construct($accountNUmber,$balance);
    public function getBalance();
    public function deposit($amount);
    public function withdraw($amount);
}
 
abstract class AbstractAccount implements AccountInterface{
    protected $accountNUmber;
    protected $balance;
    function __construct($accountNUmber,$balance){
        $this->accountNUmber=$accountNUmber;
        $this->balance=$balance;

    }
    public function getBalance(){
       return $this->balance;
    }
    public function deposit($amount){
        $this->balance +=$amount;
    }
    public function withdraw($amount){}
}

 class SAvingsAccount extends AbstractAccount{
 

    public function withdraw($amount){
        if($amount>$this->balance){
            echo "Insufficient balance";
            return;
        }

        if($amount>5000){
            echo "You can not withdraw more then 5000 \n";
            return;
        }
        $this->balance -=$amount;
    }
 }




 class CurrentAccount extends AbstractAccount{

    public function withdraw($amount){
        if($amount>$this->balance){
            echo "Insufficient balance";
            return;
        }

        
        $this->balance -=$amount;
    }
    }
 


 class PriorityAccount extends AbstractAccount{

    public function withdraw($amount){
        if($amount>$this->balance){
            echo "Insufficient balance";
            return;
        }

        if($amount>60000){
            echo "You can not withdraw more then 60000 \n";
            return;
        }
        $this->balance -=$amount;
    
    }
 }

 $sazzad =new SAvingsAccount(4000,5000);
 echo $sazzad->getBalance();
 echo PHP_EOL;
 $sazzad->deposit(6000);
 echo $sazzad->getBalance();
 echo PHP_EOL;
 $sazzad->withdraw(2000);
 echo $sazzad->getBalance();
