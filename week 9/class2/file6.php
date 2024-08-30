<?php

$books =<<<EOD
Book 1
Book 2
Book 3
EOD;
file_put_contents("Boooks2.txt", $books,FILE_APPEND);
echo "Done";