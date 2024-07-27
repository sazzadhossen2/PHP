<?php

//Index Array
// $app=["Apple","IOS","Android","HTC"];
// print($app[1]);


//Loop array
// $app=["Apple","IOS","Android","HTC"];
// foreach($app as $item){
//     echo $item."<br/>";
// }


//associative array
// $billgets=[
//     "fastname"=>"Sazzad",
//     "last name"=>"Hossen",
//     "Age"=>"23",
//     "Gender"=>"mail",
// ];
// // print_r($billgets);
// print($billgets["fastname"]);



//Loop over Associative array
// $billgets=[
//     "fastname"=>"Sazzad",
//     "last name"=>"Hossen",
//     "Age"=>"23",
//     "Gender"=>"mail",
// ];
// foreach($billgets as $key=>$value){
// echo $key.":".$value. "<br>";
// }


//multidimensional array
// $app1=["Apple1","IOS1","Android1","HTC1"];
// $app2=["Apple2","IOS2","Android2","HTC2"];
// $app3=["Apple3","IOS3","Android3","HTC3"];
// $app4=["Apple4","IOS4","Android4","HTC4"];

// $all_app=[$app1,$app2,$app3,$app4];
// // print_r($all_app[0]);
// print_r($all_app[0][1]);



//How to Loop over Multidimensional Array
// $app1=["Apple1","IOS1","Android1","HTC1"];
// $app2=["Apple2","IOS2","Android2","HTC2"];
// $app3=["Apple3","IOS3","Android3","HTC3"];
// $app4=["Apple4","IOS4","Android4","HTC4"];
// $all_app=[$app1,$app2,$app3,$app4];
// foreach($all_app as $parent){
//     foreach($parent as $child){
//         print_r($child. "<br>");
//     }
// }



//Multidimensional array Associative 
// $billgets1=[
//     "fastname"=>"Sazzad",
//     "last name"=>"Hossen",
//     "Age"=>"23",
//     "Gender"=>"mail",
// ];
// $billgets2=[
//     "fastname"=>"shamim",
//     "last name"=>"Hossen",
//     "Age"=>"33",
//     "Gender"=>"mail",
// ];
// $billgets3=[
//     "fastname"=>"",
//     "last name"=>"Hossen",
//     "Age"=>"23",
//     "Gender"=>"mail",
// ];

// $all_billgets=[$billgets1,$billgets2,$billgets3];
// // print_r($all_billgets[1]);
// print_r($all_billgets[1]["Age"]);




//How to loop over Multidimensional  Associative array
// $billgets1=[
//     "fastname"=>"Sazzad",
//     "last name"=>"Hossen",
//     "Age"=>"23",
//     "Gender"=>"mail",
// ];
// $billgets2=[
//     "fastname"=>"shamim",
//     "last name"=>"Hossen",
//     "Age"=>"33",
//     "Gender"=>"mail",
// ];
// $billgets3=[
//     "fastname"=>"",
//     "last name"=>"Hossen",
//     "Age"=>"23",
//     "Gender"=>"mail",
// ];

// $all_billgets=[
//    "one"=> $billgets1,
//    "Two"=> $billgets2,
//   "Three"=>  $billgets3
// ];

// // foreach($all_billgets as $parentkey=>$parentvalue){
// //     echo $parentkey."<br>";
// // }
// foreach($all_billgets as $parentkey=>$parentvalue){
//         foreach($parentvalue as $childkey=>$childValue){
//             echo $childkey.":".$childValue."<br>";
//         }
//     }



//Build in method 
//array_values
//array_keys
//array_key_exist
//array_search
//array_flip
// $billgets1=[
//     "fastname"=>"Sazzad",
//     "last name"=>"Hossen",
//     "Age"=>"23",
//     "Gender"=>"mail",
// ];
// $value=array_values($billgets1);
// $key=array_keys($billgets1);
// $isExist=array_key_exists("Age",$billgets1);
// $search=array_search("23",$billgets1);
// $flip=array_flip($billgets1);
// print_r($flip);




// $app=array("Apple","IOS","Android",);
// $count=count($app);
// $size=sizeof($app);
// echo $size;


// $numbers=array(2,3,4,5,6);
// $arraySum=array_sum($numbers);
// $arrayProduct=array_product($numbers);
// echo $arrayProduct;


// $numbers1=array(4,22,4,5,1);
// $numbers2=array(2,3,4,5,6);
// $marg=array_merge($numbers1,$numbers2);
// print_r($marg);


$app=["Apple","IOS","Android","HTC"];
$replacement=[0=>"HTTP",1=>"DIO"];
$replsce=array_replace($app,$replacement);
print_r($replsce);
