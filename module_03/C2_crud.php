<?php
// PHP file handling

// Step 1 : file opening / File Writing

$fileName = "example.txt";  // Create or reference a file named 'example.txt'
$fileRecourse =  fopen($fileName, 'w'); // Open the file in write mode ('w' - creates the file if it doesn't exist or clears it if it does)
fwrite($fileRecourse, "Hello, this is test file. \n");  // Write first line to the file
fwrite($fileRecourse, "Second Line Added. \n");  // Write second line to the file
fclose($fileRecourse);  // Always close the file after writing to save changes and free system resources

// Step 2: File Reading (Either fread OR line-by-line)

// Method 1: Read Entire File
$fileRecourse = fopen($fileName, 'r');
$content = fread($fileRecourse, filesize("example.txt"));
echo $content;
fclose($fileRecourse);

// Method 2: Line by Line Reading
$fileRecourse = fopen($fileName, 'r');
echo "\n--- Line by Line Reading ---\n";
while(!feof($fileRecourse)){
    echo fgets($fileRecourse);
}
fclose($fileRecourse);