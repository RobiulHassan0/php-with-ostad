<?php

$fileName = "example.text";
$fileHandle = fopen($fileName, "w");
fwrite($fileHandle, "Hello PHP");
fclose($fileHandle);