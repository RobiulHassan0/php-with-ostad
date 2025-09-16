// Anonymous Function 
const add = function(a, b){
    return a + b;
}
console.log("4 + 5 : ", add(4, 5));

const multiply = function(a, b){
    return a * b;
}
console.log("5 × 8 : ", multiply(5, 8));


// Arrow Function 
const subtract = (a, b) => {return a - b; }
console.log("9 - 4 : ", subtract(9, 4));

const divide = (a, b) => {return a / b;}
console.log("7 ÷ 3 : ", divide(7, 3));

const square = (a) => a * a;
console.log("8 of 8 square: ", square(8));  