<?php

// String Evaluate
$password = 'password';
echo strlen($password), "\n";

if(strlen($password) >= 8){
    echo "Password Requirement fulfilled! \n";
}
else{
    echo "Password Length must be 8 character \n";
}

// Search certain Keyword or Sign
$userMail = 'user@mail.com';
echo strpos($userMail, '@');
