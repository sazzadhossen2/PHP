<?php

//PHP Strict Mode
declare(strict_types=1);

// $string='Ostad';
// $stringln=strlen($string);
// echo $stringln;


//Function-----------------------------
// function sum($x,$y){
//     $number1=$x;
//     $number2=$y;
//     $res=$number1+$number2;
//    echo $res. "<br/>";
// }
// sum(3,8);
// sum(33,7);



//default parameter-------------------------
// function sum($x,$y=10){
//     $number1=$x;
//     $number2=$y;
//     $res=$number1+$number2;
//    echo $res. "<br/>";
// }
// sum(3,8);


// //Function type------------------int,string,float
//  function sum(int $x,int $y){
//         $number1=$x;
//         $number2=$y;
//         $res=$number1+$number2;
//        echo $res. "<br/>";
//     }
//     sum(2,6);
    


// //Function type multiple------------------
//  function sum(int|String|float $x,){
//         $number1=$x;
//     echo $number1;
//     }
//     sum("A");


//  Function type null------------------
//  function sum(?String $x,){
//         $number1=$x;
//     echo $number1;
//     }
//     sum("A");
//     sum(null);


//  Variadic Function------------------
//  function sum(...$x,){
       
//     print_r($x);
//     }
//     sum("A","B","C","D","E","F");


//Anonymous Function-------------------------
// (
//    function (){
//     echo "Anonymous";
//    } 
// )();


//Function Return------------------
// function sum(){
//     return 40;
// }
// echo sum()+50;

//Function Return type --------------------int,bool,string
// function sum():bool{
//     return true;
// }


//Function Multiple Return type / union return type--------------------
// function sum():bool|int|String|float{
//     return 5.6;
// }

//For Loop---------------------------------
// for($i=0;$i<16;$i++){
//     echo "<button>$i</button>";
// }


//while Loop--------------------------
// $i=0;
// while($i<10){
//     echo "<button>$i</button>";
//     $i++;
// }


//do while Loop-----------------------
// $i=0;
// do{
//     echo "<button>$i</button>";
//     $i++;
// }while($i<10);


//break
// for($i=0;$i<16;$i++){
//     if($i==10){
//         break;
//     }
//     echo "<button>$i</button>";
// }



//Continue
for($i=0;$i<16;$i++){
    if($i%2==0){
       continue;
    }
    echo "<button>$i</button>";
}