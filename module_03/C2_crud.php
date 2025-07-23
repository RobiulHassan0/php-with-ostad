<?php

// Step 1: File creation or open for writing

$fileName = "example.txt";  // Create or reference a file named 'example.txt'
$fileRecourse =  fopen($fileName, 'w'); // Open the file in write mode ('w' - creates the file if it doesn't exist or clears it if it does)
fwrite($fileRecourse, "Hello, this is test file. \n");  // Write first line to the file
fwrite($fileRecourse, "Second Line Added. \n");  // Write second line to the file
fclose($fileRecourse);  // Always close the file after writing to save changes and free system resources
