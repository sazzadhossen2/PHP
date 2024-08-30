<?php
$content =file_get_contents("books.txt");
echo $content;

//book count
$book =explode(PHP_EOL,$content);
echo "Total books count". count($book)-1;