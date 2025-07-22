<?php
// PHP CORE |  String Helper Functions


// strlen() <=> Count string length
$password = 'password';
echo strlen($password), "\n";

if(strlen($password) >= 8){
    echo "Password Requirement fulfilled! \n";
}
else{
    echo "Password Length must be 8 character \n";
}

// strpos() <=> find-Out character or any string position
$userMail = 'user@mail.com';
echo strpos($userMail, '@'), "\n";

if(strpos($userMail, '@') === false){  // Evaluate String Length
    echo "Enter valid email. \n";
}else{
    echo "login Successful! \n";
}


// str_replace() <=> String Search And Replace
$text = 'this is Original text!';
echo $text, "\n";
// structure: str_replace(search, replace, subject)
$replacedText = str_replace('Original', "Replaced or Updated", $text);
echo $replacedText, "\n";

echo "\n";

// trim() <=> remove both side blank-Space
$greet = " Hello World ";
echo "original text: ", $greet, "\n";
echo "removed space: ", trim($greet), "\n";

echo "\n";

// ltrim() <=> Remove left-side Space
$LeftSpace = " Welcome ";
echo "with both-side space: ", $LeftSpace, "\n";
echo "with only left space: ", ltrim($LeftSpace), "\n"; 

echo "\n";

// rtrim() <=> Remove Right-side Space
$rightSpace = " Hey! ";
echo "with original text: '" . $rightSpace . "'\n";
echo "remove right space: '" . rtrim($rightSpace) . "'\n";

echo "\n";

// strtoupper() <=> convert the lowercase sentence to the Uppercase
$userEmail = 'welcome to programming world';
echo strtoupper($userEmail), "\n"; 

// strtolower() <=> Convert the Uppercase sentence to the lowercase;
$greeting = "HELLO WORLD";
echo strtolower($greeting), "\n";

// Convert the first character of every words in a sentence to Uppercase;    
$greetPhp = "welcome to PHP programming language";
echo ucwords($greetPhp), "\n";

// Convert only First character of the sentence to Uppercase
$greetUser = "welcome to the programming world";
echo ucfirst($greetUser), "\n";

echo "\n";

// substr() <=> Get certain character
$post = "it is a string post";
echo "total character: ", strlen($post), "\n";

echo "first 10 character: ", substr($post, 0, 10), "\n";  // get first 10 character
echo "counted total: ", strlen(substr($post, 0, 10)), "\n"; // checking it's 10 character or not

echo "last 10 character: ", substr($post, -10), "\n";   // get last 10 character
echo "counted total: ", strlen(substr($post, -10)), "\n"; // checking it's 10 character or not

echo "\n";