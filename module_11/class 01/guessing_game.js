const readline = require('readline');

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

const secretNumber = Math.floor(Math.random() * 10) + 1;
let attempts = 0;

console.log("let's play!")
console.log('Guess a number');

function askGuess(){
    rl.question('guess a number from 1 to 10: ', (input) =>{
        const guess = parseInt(input);  
        attempts++;   
        
        if(isNaN(guess)){
            console.log('please type a number');
            askGuess();
        }else if(guess < secretNumber){
            console.log('guess more big number');
            askGuess();
        }else if(guess > secretNumber){
            console.log('guess more small number');
            askGuess();
        }else{
            console.log(`Welcome! you are guessed right number! (${secretNumber}) in ${attempts} attempts.`);
            rl.close();
        }
    })
}

askGuess();