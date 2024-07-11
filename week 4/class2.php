<?php

// for($i=0;$i<10;$i++){
// echo $i;
// }

// $fastname="sazzad";
// $lastname="Hossen";
// // printf("My name is %s %s",$fastname,$lastname);
//  $output= sprintf("My name is %s %s",$fastname,$lastname);
// echo $output;


// $number=9;
// $evenodd='';
// if($number %2==0){
//     $evenodd='even';
// }else{
//     $evenodd="odd";
// }
// printf("The number %d is %s",$number,$evenodd);


// $floatingValue=3.45667;
// printf("The Floating Value is %.2f",$floatingValue);


// $number=17;
// printf("Hexadecimal number %d is %x",$number,$number);



$year=2020;
$leapyear=false;

if($year %400==0){
    $leapyear="True";
}elseif($year%100==0){
    $leapyear="False";
}
elseif($year%4==0){
    $leapyear="true";
}
else{
    $leapyear="False";
}
if($leapyear){
    echo "$year is a leap year";
}else{
    echo "$year is not leap year";
}



$weekenday=3;
$day=["thursday","saturday","sunday","wednesday","Friday",];
echo $day[$weekenday];


?>