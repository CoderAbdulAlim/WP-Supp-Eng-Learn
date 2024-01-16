/**
  এখানের 75% পর্যন্ত অনুশীলন করুন

  https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/
 */

// => Solve Those Problems 

// Problem 1: Write a loop to display numbers from 1 to 50.
// Problem 1: Solve by for loop
let firstNum = 1;
let lastNum = 50;

for(; firstNum <= lastNum; firstNum++){
  console.log(firstNum);
}

//another option
for(; firstNum <= lastNum; ){
  console.log(firstNum);
  firstNum++;
}

//Problem 1: Solve by while loop
while(firstNum <= lastNum){
  console.log(firstNum);
  firstNum++;
}

// Problem 1: Solve by do/while loop
do {
  console.log(firstNum);
  firstNum++;
}
while(firstNum <= lastNum);


// Problem 2: Write a loop to display even numbers from 36 to 96.
// Solve by for loop
let firstNum = 36;
let lastNum = 96;

for(; firstNum <= lastNum; firstNum++){
  if(firstNum % 2 == 0){
      console.log(firstNum);
  }
}

//another option
for(; firstNum <= lastNum; ){
  if(firstNum % 2 == 0){
      console.log(firstNum);
  }
  firstNum++;
}

//Solve by while loop
while(firstNum <= lastNum){
  if(firstNum % 2 == 0){
      console.log(firstNum);
  }
  firstNum++;
}

//Solve by do/while loop
do {
  if(firstNum % 2 == 0){
      console.log(firstNum);
  }
  firstNum++;
}
while(firstNum <= lastNum);


// Problem 3: Write a loop to display odd numbers from 51 to 101.
// Solve by for loop
let firstNum = 51;
let lastNum = 101;

for(; firstNum <= lastNum; firstNum++){
  if(firstNum % 2 == 1){
      console.log(firstNum);
  }
}

//another option
for(; firstNum <= lastNum; ){
  if(firstNum % 2 == 1){
      console.log(firstNum);
  }
  firstNum++;
}

//Solve by while loop
while(firstNum <= lastNum){
  if(firstNum % 2 == 1){
      console.log(firstNum);
  }
  firstNum++;
}

//Solve by do/while loop
do {
  if(firstNum % 2 == 1){
      console.log(firstNum);
  }
  firstNum++;
}
while(firstNum <= lastNum);

// Problem 4: Write a loop to calculate the sum of numbers from 1 to 5.
// Solve by for loop
let firstNum = 1;
let lastNum = 5;
let sum = 0;

for (let i = firstNum; i <= lastNum; i++) {
    sum += i;
}

console.log("Sum by for loop: " + sum);

//another option
for (; firstNum <= lastNum; firstNum++) {
    sum += firstNum;
}

console.log("Sum by for loop: " + sum);


//Solve by while loop

let currentNum = firstNum;

while (currentNum <= lastNum) {
    sum += currentNum;
    currentNum++;
}

console.log("Sum by while loop: " + sum);


//Solve by do/while loop

do {
    sum += currentNum;
    currentNum++;
} while (currentNum <= lastNum);

console.log("Sum by do while loop: " + sum);


// Solve by for loop and array
let firstNum = 1;
let lastNum = 5;
let numStorage = [];

//insert in array
for (let i = firstNum; i <= lastNum; i++) {
    numStorage.push(i);
}

//another option to insert in array
for (; firstNum <= lastNum; firstNum++) {
    numStorage.push(i);
}

let printNumber = numStorage;
console.log(printNumber);

sum all number
let sum = 0;

for (let i = 0; i < numStorage.length; i++) {
    sum += numStorage[i];
}

console.log("Sum of numbers: " + sum);




//Solve by while loop and array

let currentNum = firstNum;

while (currentNum <= lastNum) {
    numStorage.push(currentNum);
    currentNum++;
}

let printNumber = numStorage;
console.log(printNumber);

let sum = 0;
let i = 0;

while (i < numStorage.length) {
    sum += numStorage[i];
    i++;
}

console.log("Sum of numbers using a while loop: " + sum);



//Solve by do/while loop and array

let currentNum = firstNum;

do {
    numStorage.push(currentNum);
    currentNum++;
} while (currentNum <= lastNum);

let printNumber = numStorage;
console.log(printNumber);

let sum = 0;
let i = 0;

do {
    sum += numStorage[i];
    i++;
} while (i < numStorage.length);

console.log("Sum of numbers using a do...while loop: " + sum);


// Problem 5: Write a loop to calculate the product of numbers from 1 to 5.

// Solve by for loop and array
let totalInventoryInTime = 5;
let inventory = [];

for (let i = 0; i < totalInventoryInTime; i++) {
    // Generate a random number and insert it into the array
    let randomNum = Math.floor(Math.random() * 100); // Adjust the range as needed
    inventory.push(randomNum);
}

console.log("Product Inventory: " + inventory);

sum work total product number
let totalProduct = 0;

for (let i = 0; i < inventory.length; i++) {
    totalProduct += inventory[i];
}

console.log("Total Product in Inventory: " + totalProduct);


//Solve by while loop and array
let totalInventoryInTime = 5;
let inventory = [];
let thInventory = 1;

while (thInventory <= totalInventoryInTime) {
    // Generate a random number and insert it into the array
    let randomNum = Math.floor(Math.random() * 100); // Adjust the range as needed
    inventory.push(randomNum);
    thInventory++;
}

console.log("Product Inventory: " + inventory);

// sum work total product number
let totalProduct = 0;
let i = 0;

while (i < inventory.length) {
    totalProduct += inventory[i];
    i++;
}

console.log("Total Product in Inventory: " + totalProduct);



//Solve by do/while loop and array

let totalInventoryInTime = 5;
let inventory = [];
let thInventory = 1;

do {
    // Generate a random number and insert it into the array
    let randomNum = Math.floor(Math.random() * 100); // Adjust the range as needed
    inventory.push(randomNum);
    thInventory++;
} while (thInventory <= totalInventoryInTime);


console.log("Product Inventory: " + inventory);

// sum work total product number
let totalProduct = 0;
let i = 0;

do {
    totalProduct += inventory[i];
    i++;
} while (i < inventory.length);


console.log("Total Product in Inventory: " + totalProduct);



// Problem 6: Write a loop to display the squares of numbers from 1 to 5.
// Solve by for loop

let firstNum = 1;
let lastNum = 5;

for (let i = firstNum; i <= lastNum; i++) {
    squareNumber = i ** 2;  // Calculate the square using the ** operator
    console.log("Square of " + i + ": " + squareNumber);
}

//another option
for (let i = firstNum; i <= lastNum; i++) {
    let squareNumber = Math.pow(i, 2);
    console.log("Square of " + i + ": " + squareNumber);
}


//insert in array
let firstNum = 1;
let lastNum = 5;
let numStorage = [];

for (let i = firstNum; i <= lastNum; i++) {
    squareNumber = i ** 2;  // Calculate the square using the ** operator
    numStorage.push(squareNumber);
}
//console.log("Square number : " + numStorage);

//print from array by for loop
for(let a = 0; a < numStorage.length; a++){
        console.log("Square of " + (a+1) + ": " + numStorage[a]);
}



//Solve by while loop
let firstNum = 1;
let lastNum = 5;
let numStorage = [];

while(firstNum <= lastNum){
    squareNumber = firstNum ** 2;  // Calculate the square using the ** operator
    numStorage.push(squareNumber);
    firstNum++;
}
//console.log("Square number : " + numStorage);

//print from array by while loop
let a = 0;
while(a < numStorage.length){
    console.log("Square of " + (a+1) + ": " + numStorage[a]);
    a++;
}



//Solve by do/while loop
let firstNum = 1;
let lastNum = 5;
let numStorage = [];

do {
    squareNumber = firstNum ** 2;  // Calculate the square using the ** operator
    numStorage.push(squareNumber);
    firstNum++;
}
while(firstNum <= lastNum);
//console.log("Square number : " + numStorage);

//print from array by do...while loop
let a = 0;
do {
    console.log("Square of " + (a+1) + ": " + numStorage[a]);
    a++;
}
while(a < numStorage.length);



// Problem 7: Write a loop and display all the elements in this array. ["Toyota", "Honda", "Ford", "Chevrolet", "Nissan", "BMW", "Mercedes-Benz", "Audi", "Hyundai", "Kia"];

//print from array by for loop
let carShowroom = ["Toyota", "Honda", "Ford", "Chevrolet", "Nissan", "BMW", "Mercedes-Benz", "Audi", "Hyundai", "Kia"];
for(let a = 0; a < carShowroom.length; a++){
        console.log("Car Brand Name " + (a+1) + ": " + carShowroom[a]);
}

//print from array by while loop
let carShowroom = ["Toyota", "Honda", "Ford", "Chevrolet", "Nissan", "BMW", "Mercedes-Benz", "Audi", "Hyundai", "Kia"];
let a = 0;
while(a < carShowroom.length){
    console.log("Car Brand Name " + (a+1) + ": " + carShowroom[a]);
    a++;
}

//print from array by do...while loop
let carShowroom = ["Toyota", "Honda", "Ford", "Chevrolet", "Nissan", "BMW", "Mercedes-Benz", "Audi", "Hyundai", "Kia"];
let a = 0;
do {
    console.log("Car Brand Name " + (a+1) + ": " + carShowroom[a]);
    a++;
}
while(a < carShowroom.length);