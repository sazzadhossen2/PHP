<?php


// class Father{
// function __construct(){

//     echo  "Hlow Construct";
// }
// }

// class Son extends Father{

// }

// $sonObj=new Son();



class Father {
    function __construct() {
        echo "Hlow Construct";
    }
}

class Son extends Father {
    function __construct() {
        parent::__construct(); // Correctly calling the parent's constructor
        echo " Hlow Son Construct";
    }
}

$sonObj = new Son();
