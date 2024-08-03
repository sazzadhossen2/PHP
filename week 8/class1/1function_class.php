<?php
// function,class
class person{
  public $fastName="Sazzad";
  public $lastName="Hossen";

  public function getName(){
    $fullName=$this->fastName." ".$this->lastName;
    echo $fullName;
  }
}

$obj =new person();
$obj ->getName();