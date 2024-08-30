<?php 


//PHP Encoded----------------------------------------------------------------------
// single Dimention Array to JSON object
// $AsocArray=["name"=>"Sazzad","age"=>22];
// $JSON=json_encode($AsocArray);
// echo $JSON;



//Multi Dimention Arraay to Json Array
// $AsocArray=[
//     ["name"=>"Sazzad","age"=>22],
//     ["name"=>"Shamim","age"=>25]
// ];
// $JSON=json_encode($AsocArray);
// echo $JSON;


//PHP Decode-----------------------------------------------------------------------
// json object to single Dimention Array
// $StringData ='{"name":"Sazzad","age":23}';
// $PHPAsocArray = json_decode($StringData, true);
// print_r($PHPAsocArray);


//json Array to Multi Dimention Array
// $StringData ='[{"name":"Sazzad","age":23},{"name":"Shamim","age":24}]';
// $PHPAsocArray = json_decode($StringData, true);
// print_r($PHPAsocArray);