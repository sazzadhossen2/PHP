<?php

$books = [
    "Book 5",
    "Book 6",
    "Book 7",
    "Book 8",
];

$file = fopen("books.txt", "a");

foreach ($books as $book) {
    fwrite($file, $book . "\n");  // Add a newline character after each book
}

fclose($file);  // Don't forget to close the file after writing
?>