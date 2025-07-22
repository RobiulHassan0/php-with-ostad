<?php

/* Command Line Quiz Application
------------------------------------- */

// Multi-dimensional array to store questions
$questions = [
    ['question' => 'What is capital of BD ?',  'answer' => 'Dhaka'],
    ['question' => 'What is 5 * 5 = ?',  'answer' => '25'],
    ['question' => 'Who created PHP ?',  'answer' => 'Rasmus']
];

$answers = [];

// Loop to get answers from the user
foreach($questions as $index => $q){
    echo ($index + 1) . ". " . $q['question'] . "\n";
    $answers [] = trim(readline('type your answer : '));
} 

// Function to quiz evaluation
function evaluateQuiz(array $questions, array $answers):int{
    $score = 0;
    foreach($questions as $index => $question){
        echo "-------------------------------------\n";
        echo "Your Answer is: ". $answers[$index]. "\n";
        echo "Correct Answer is: ". $question['answer']. "\n";
        echo "-------------------------------------\n"; 
        
        if($answers[$index] === $question['answer']){
            $score++;
        }
    }
    return $score;
}

$userScore = evaluateQuiz($questions, $answers);
echo "Your Score is $userScore out of ". count($questions). "\n";


// Compare user's score and display feedback
switch (true){
    case $userScore === count($questions):
        echo "Excellent! you are a good boy!\n";
        break;
    case $userScore >= 1:
        echo "Good Effort, but have to more study! \n";
        break;  
    default:
        echo "You are totally failed. more study and try again";       
}

?>