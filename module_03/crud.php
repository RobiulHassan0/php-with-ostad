<?php

$fileName = "example.php";
$fileHandle = fopen($fileName, "W");
fwrite($fileHandle, "Hello PHP");
fclose($fileHandle);