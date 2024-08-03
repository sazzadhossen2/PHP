<?php

class Father{

//  public $number1 = 50;
//   public  $number2= 30;
//   public  $number3= 40;

  public static $number1 = 50;
  public static $number2= 30;
  public static $number3= 90;

}

class Son extends Father{
function addNumber(){

    // $sum= $this->number1 + $this->number2 + $this->number3;
    // echo $sum;


        $sum= parent:: $number1 + parent:: $number2 + parent:: $number3;
    echo $sum;

}
}

$pObj=new Son();
$pObj->addNumber();