<?php

// $file =fopen("books.txt","r");
// while(!feof($file)){
//     echo fgets($file);
// }

// $file=file("books.txt");
// foreach($file as $line){
//     echo $line;
// }


$file = file("books.txt");

// Count the total number of lines (books) and display it
echo "Total books: " . count($file);