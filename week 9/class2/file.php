<?php

$file=fopen("data.txt","a");
$data ="Hello form ostad Again 2\n";
fwrite($file,$data);
echo "Done";
fclose($file);