<?php

//constructor & it's parameter
class person{
    public function __construct(){
        $fast=30;
        $second=44;
        echo $fast+$second;
    }
}
$obj=New person();