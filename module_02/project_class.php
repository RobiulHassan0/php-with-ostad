<?php

// Contact Management Application
/*
$contacts = [];

function addContact(array &$contacts, string $name, string $email, $phone):void
{
    // $contacts = ['name' => $name, 'email' => $email, 'phone' => $phone];
    array_push($contacts, ['name' => $name, 'email' => $email, 'phone' => $phone]);
}

function displayContacts(array $contacts):void{
    if(empty($contacts)){
        echo "No Contact Available \n";
    }
    else{
        $contactCount = 1;
        foreach($contacts as $contact){
            // echo "
            // Name: {$contact['name']},
            // Email: {$contact['email']},
            // Phone: {$contact['phone']} \n";
            echo "Contact {$contactCount}\n";
            echo "--------------------------\n";
            echo "Name: {$contact['name']}\n";
            echo "Email: {$contact['email']}\n";
            echo "Phone: {$contact['phone']}\n";
            echo "--------------------------\n";

            $contactCount++;
        }
    }
}


while(true){
    echo "\nContact Management App \n";
    echo "1. Add Contact\n";
    echo "2. View Contact\n";
    echo "3. Exit\n";

    $choice = (int)readline("Choice An Option: ");
    
    if($choice === 1){
        $name = readline("Enter Your Name : ");
        $email = readline('Enter Your Email : ');
        $phone = readline("Enter Your Phone Number : ");
        addContact($contacts, $name, $email, $phone);

        // echo "$phone added to Contacts.\n";
        // echo "$name added to Contacts.\n";
        // echo "$email added to Contacts.\n";
        echo "Contact created successfully \n";

    }elseif($choice === 2){
        displayContacts($contacts);
    }elseif($choice === 3){
        echo "Exited\n";
        break;
    }
    else{
        echo "Invalid Choice. please try again \n";
    }
}
*/


// Quiz Application

$questions = [
    ['question' => 'What is the 2+2 = ?', 'answer' => '4'],
    ['question' => "What is the capital of BD ?", 'answer' => 'Dhaka'],
    ['question' => 'Who wrote the Agnibeena ?', 'answer' => 'najrul']
];

$answer = [];

foreach($questions as $index => $question){
echo ($index + 1) . ". " . $question['question']. "\n" ;
$answer [] = trim(readline('type answer: '));
}

function evaluateQuiz(array $questions, array $answer):int
{
    $score = 0;
    foreach($questions as $index => $question){
        if($answer[$index] === $question['answer']){
            $score++;
        }
    }
    return $score;
}
$myScore = evaluateQuiz($questions, $answer);
echo "\n You Scored $myScore out of " . count($questions) . ".\n";


if($myScore === count($questions)){
    echo "Great Job! \n";
}elseif($myScore >= 1){
    echo "Good Effort! \n";
}
else{
    echo "you are failed. try again \n";
}