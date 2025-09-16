let fruit = 'banana';

switch (fruit){
    case 'apple':
        console.log('this an Apple');
    case 'banana' :
        console.log('this is a Banana');
    case 'orange':
        console.log('this is a Orange');
    default:
        console.log('Unknown Fruit'); 

};

console.log("\n");

let grade = 'G';
switch (grade){
    case 'A':
        console.log('Excellent!');
        break;
    case 'B':
        console.log('Good Job!');
        break;
    case 'C':
        console.log('You Passed');
        break;
    case 'F':
        console.log('Better luck next time');
        break;
    default:
        console.log('Invalid Grade');
}

// console.log("\n");

let i = 1;
while (i <= 5){
    console.log(i);
    i++;
}


console.log("\n");

let x = Math.random();
let y = x * 10;
let z = Math.floor(y);
console.log(z)