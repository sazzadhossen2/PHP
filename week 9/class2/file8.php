<?php
// $content =file_get_contents("./books.txt");
// echo $content;

//    ./ = current directory
//    ../ = parent directory

include "vendor/autoload.php";
use League\Csv\Reader;
$reader=Reader::createFromPath("booksa.csv","r");
$books =$reader->getRecords();
foreach($books as $book){
    $output="Book Name ={$book[0]}, Author = {$book[1]}".PHP_EOL;
    echo $output;
}