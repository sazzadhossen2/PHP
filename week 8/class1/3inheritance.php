<?php

class Father{
function show(){
    $proparti1=45;
    $proparti2=44;
    echo  $proparti1+$proparti2;
}
}

class Son extends Father{

}

$sonObj=new Son();
$sonObj->show();