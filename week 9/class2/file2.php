<?php

$books = [
    "Book 1",
    "Book 2",
    "Book 3",
    "Book 4",
];

$file = fopen("books.txt", "w");

foreach ($books as $book) {
    fwrite($file, $book . "\n");  // Add a newline character after each book
}

fclose($file);  // Don't forget to close the file after writing
?>
