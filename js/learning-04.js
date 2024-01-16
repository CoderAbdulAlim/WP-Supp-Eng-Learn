//JavaScript For In Loop

for (key in object) {
  // code block to be executed
}

const person = {fname:"John", lname:"Doe", age:25}; 

let txt = "";
for (let x in person) {
  txt += person[x] + " ";
}

//For In Over Arrays
for (variable in array) {
  code
}

const numbers = [45, 4, 9, 16, 25];

let txt = "";
for (let x in numbers) {
  txt += numbers[x];
}

//Array.forEach()
const numbers = [45, 4, 9, 16, 25];

let txt = "";
numbers.forEach(myFunction);

function myFunction(value, index, array) {
  txt += value;
}

const numbers = [45, 4, 9, 16, 25];

let txt = "";
numbers.forEach(myFunction);

function myFunction(value) {
  txt += value;
}

//The For Of Loop
for (variable of iterable) {
  // code block to be executed
}

//Looping over an Array
const cars = ["BMW", "Volvo", "Mini"];

let text = "";
for (let x of cars) {
  text += x;
}

//Looping over a String
let language = "JavaScript";

let text = "";
for (let x of language) {
text += x;
}

// ========================================

x = Math.random() * 100;
y = Math.floor(Math.random() * 100);
console.log(x, y);

// ========================================

// //Return Early Pattern for Functions
// function myFun() {
//     console.log("Hello");
//     return "World";
//     console.log("byebye");
//   }
//   myFun();

// Setup
function abTest(a, b) {
  // Only change code below this line
  
  if (a < 0 || b < 0) {
      return undefined;
    }

  // Only change code above this line

  return Math.round(Math.pow(Math.sqrt(a) + Math.sqrt(b), 2));
}

console.log(abTest(-2,2));

//   ==================================================
// Counting Cards
// In the casino game Blackjack, a player can determine whether they have an advantage on the next hand over the house by keeping track of the relative number of high and low cards remaining in the deck. This is called Card Counting.

// Having more high cards remaining in the deck favors the player. Each card is assigned a value according to the table below. When the count is positive, the player should bet high. When the count is zero or negative, the player should bet low.

// Count Change	Cards
// +1	2, 3, 4, 5, 6
// 0	7, 8, 9
// -1	10, 'J', 'Q', 'K', 'A'
// You will write a card counting function. It will receive a card parameter, which can be a number or a string, and increment or decrement the global count variable according to the card's value (see table). The function will then return a string with the current count and the string Bet if the count is positive, or Hold if the count is zero or negative. The current count and the player's decision (Bet or Hold) should be separated by a single space.

// Example Outputs: -3 Hold or 5 Bet

// Hint
// Do NOT reset count to 0 when value is 7, 8, or 9.
// Do NOT return an array.
// Do NOT include quotes (single or double) in the output.

// let count = 0;

// function cc(card) {
//   // Only change code below this line


//   return "Change Me";
//   // Only change code above this line
// }

// cc(2); cc(3); cc(7); cc('K'); cc('A');


// let count = 0;

// function cc(card) {
//   // Only change code below this line
//   switch (card) {
//     case 2:
//     case 3:
//     case 4:
//     case 5:
//     case 6:
//       count++;
//       break;
//     case 10:
//     case "J":
//     case "Q":
//     case "K":
//     case "A":
//       count--;
//       break;
//   }
//   if (count > 0) {
//     return count + " Bet";
//   } else {
//     return count + " Hold";
//   }
//   // Only change code above this line
// }

// cc(2); cc(3); cc(7); cc('K'); cc('A');


let count = 0;

function cc(card) {
// Only change code below this line
var regex = /[JQKA]/;
if (card > 1 && card < 7) {
  count++;
} else if (card === 10 || regex.test(card)) {
  count--;
}

if (count > 0) return count + " Bet";
return count + " Hold";

// Only change code above this line
}

// ========================================

// Stand in Line
// In Computer Science a queue is an abstract Data Structure where items are kept in order. New items can be added at the back of the queue and old items are taken off from the front of the queue.

// Write a function nextInLine which takes an array (arr) and a number (item) as arguments.

// Add the number to the end of the array, then remove the first element of the array.

// The nextInLine function should then return the element that was removed.

function nextInLine(arr, item) {
  // Only change code below this line
  
  return item;
  // Only change code above this line
}

// Setup
let testArr = [1, 2, 3, 4, 5];

// Display code
console.log("Before: " + JSON.stringify(testArr));
console.log(nextInLine(testArr, 6));
console.log("After: " + JSON.stringify(testArr));

// ========================================
// Here are real-life examples of how for and while loops are used:

// for Loop:

// Real-life Example: Supermarket Checkout

// A for loop is like a cashier at a supermarket checkout counter scanning items. You have a known number of items to scan, and you want to process each item in a predictable order. For example, you have a shopping cart with 10 items, and you want to calculate the total cost:

let totalCost = 0;

for (let itemNumber = 1; itemNumber <= 10; itemNumber++) {
  let itemPrice = getItemPrice(itemNumber);
  totalCost += itemPrice;
}

// In this scenario, the loop runs for a known, fixed number of iterations (10 times) to process each item in the shopping cart.

// while Loop:

// Real-life Example: Elevator

// A while loop is like an elevator that keeps moving until a certain condition is met. You want to keep the elevator doors open while there are people entering or exiting, and you want to close the doors when no one is inside or outside:

let peopleInside = 0;

while (peopleInside > 0 || peopleOutside > 0) {
  if (peopleInside > 0) {
      openDoors();
      let peopleEntering = getPeopleEntering();
      peopleInside += peopleEntering;
  }

  if (peopleOutside > 0) {
      openDoors();
      let peopleExiting = getPeopleExiting();
      peopleInside -= peopleExiting;
  }

  if (peopleInside === 0) {
      closeDoors();
  }
}

// In this scenario, the elevator keeps running (the loop continues) as long as there are people either inside or outside. The loop stops when there are no people inside or outside, and the elevator doors are closed.

// These real-life examples illustrate how for and while loops mirror everyday situations where you have specific needs for repetitive actions and conditions that determine when the repetition should stop.

//for ও while লুপের বিষয়ে বেসিক একটা বিষয় আমি বুঝি। সেটা হলো for লুপে ১টা কন্ডিশন সেট করা যায়। আর while লুপে একাধিক কন্ডিশন একাধিক রকমে সেটা করা যায়।

// Use for When:

// You Know the Number of Iterations in Advance: Use a for loop when you have a fixed or known number of iterations. For example, when you need to repeat a certain action a specific number of times, such as iterating through elements of an array or list, use a for loop. It's well-suited for tasks like calculating sums, averages, or performing a set of operations on a known set of data.

// Initialization and Iteration Steps Are Well-Defined: A for loop is a good choice when you can define the loop initialization, condition, and iteration steps in a clear and concise manner within the loop statement itself. It keeps all the loop control logic in one place.

// Use while When:

// You Don't Know the Number of Iterations in Advance: Use a while loop when you don't know how many iterations will be needed in advance, and the loop should continue as long as a certain condition is met. For example, when taking user input, waiting for an event to occur, or processing data until a specific condition is reached.

// Loop Termination Depends on External Conditions: A while loop is more flexible and suited to situations where the loop termination depends on external factors or runtime conditions that can change. It's a good choice when you need to continually check for a specific condition.

// Manual Initialization and Iteration: In a while loop, you have to manually handle initialization and iteration outside the loop. This flexibility can be useful when you need to perform additional logic before or after each iteration.

// In real-life programming scenarios:

// Use for when you have a clear idea of how many times you need to repeat an action, and when the loop control logic can be neatly expressed in one place.

// Use while when you have to repeatedly perform an action until a certain condition is met, and the number of iterations is not known in advance.

// Both types of loops have their strengths and are appropriate for different situations. The choice between them should be based on the specific requirements of your task and the clarity of your code.

// ========================================
// 1. Array:

// An array is a data structure that stores a list of elements.

// Creating an array
let fruits = ["apple", "banana", "cherry"];

// Accessing elements
let firstFruit = fruits[0]; // "apple"

// Modifying elements
fruits[1] = "orange"; // Array becomes ["apple", "orange", "cherry"]

// Adding elements
fruits.push("grape"); // Array becomes ["apple", "orange", "cherry", "grape"]

// Removing elements
fruits.pop(); // Array becomes ["apple", "orange", "cherry"]

// 2. Nested Array:

// A nested array is an array within an array, creating a two-dimensional structure.

let matrix = [
[1, 2, 3],
[4, 5, 6],
[7, 8, 9]
];

let value = matrix[1][2]; // Accessing a value: 6

// 3. Multi-Dimensional Array:

// A multi-dimensional array is an array that contains arrays, creating higher-dimensional structures.

let cube = [
[
    [1, 2],
    [3, 4]
],
[
    [5, 6],
    [7, 8]
]
];

let value = cube[1][0][1]; // Accessing a value: 6

// 4. Object:

// An object is a collection of key-value pairs.

// Creating an object
let person = {
name: "John",
age: 30,
city: "New York"
};

// Accessing properties
let name = person.name; // "John"

// Modifying properties
person.age = 31; // Object becomes { name: "John", age: 31, city: "New York" }

// Adding properties
person.job = "Engineer"; // Object becomes { name: "John", age: 31, city: "New York", job: "Engineer" }

// Removing properties
delete person.city; // Object becomes { name: "John", age: 31, job: "Engineer" }

// 5. Manipulating Complex Objects:

// Complex objects can be created by nesting objects and arrays.

let employee = {
name: "Alice",
roles: ["Manager", "Developer"],
contact: {
    email: "alice@example.com",
    phone: "123-456-7890"
}
};

let role = employee.roles[0]; // Accessing a role: "Manager"
let email = employee.contact.email; // Accessing email: "alice@example.com"

// 6. Nested Object:

// Objects can be nested within objects.

let car = {
make: "Toyota",
model: "Camry",
engine: {
    type: "V6",
    horsepower: 250
}
};

let engineType = car.engine.type; // Accessing engine type: "V6"

// ========================================
// Types of Arrays in JavaScript

// In JavaScript, arrays come in various forms to accommodate different data structures and use cases. Below are the common types of arrays:

// Regular Arrays (Homogeneous Arrays): These are arrays that contain elements of the same data type, such as numbers, strings, or objects. Regular arrays are the most common type of array.

let numbers = [1, 2, 3, 4, 5];
let fruits = ["apple", "banana", "cherry"];


// Mixed Arrays: These arrays can contain elements of different data types. You can have numbers, strings, objects, and other data types in the same array.

let mixedArray = [1, "apple", { name: "John" }, true];


// Array of Arrays (Nested Arrays): Arrays can contain other arrays as elements. These nested arrays create a multi-dimensional array structure.

let matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];


// Typed Arrays: These are a special type of array introduced in JavaScript for handling binary data. Typed arrays are used to work with low-level binary data and are typically used in web applications that involve handling binary data like images and audio.

let uint8Array = new Uint8Array(4); // An array of 8-bit unsigned integers


// Sparse Arrays: Sparse arrays have "holes" or undefined elements in them. In a sparse array, not all indexes have corresponding values. JavaScript allows you to create sparse arrays.

let sparseArray = [];
sparseArray[0] = "first";
sparseArray[2] = "third";


// Array-Like Objects: These are objects that have numeric indices and a length property but may not have the full set of array methods. Examples include the arguments object in functions and DOM node lists.

function exampleFunction() {
    console.log(arguments[0]);
    console.log(arguments.length);
}


// These various types of arrays in JavaScript provide flexibility for different data structures and use cases. Understanding their differences can help you choose the right type of array for your specific needs.
// ========================================
// Stand in Line
// In Computer Science a queue is an abstract Data Structure where items are kept in order. New items can be added at the back of the queue and old items are taken off from the front of the queue.

function nextInLine(arr, item) {
  // Only change code below this line
    arr.push(item);
    const removed = arr.shift();
    return removed;
    return item;
  // Only change code above this line
}

// Setup
let testArr = [1, 2, 3, 4, 5];

// Display code
console.log("Before: " + JSON.stringify(testArr));
console.log(nextInLine(testArr, 6));
console.log("After: " + JSON.stringify(testArr));
// ========================================
// এলোমেলো নাম্বার জেনারেট করা জন্য
function randomRange(myMin, myMax) {
  return Math.floor(Math.random() * (myMax - myMin + 1)) + myMin;
}
console.log(randomRange(4, 10));
// ========================================
// Replace Loops using Recursion
// পুনরাবৃত্তি বা লুপের বিকল্প হিসেবে
// যোগ করার জন্য
function sum(arr, n) {
  if(n <= 0) {
    return 0;
  } else {
    return sum(arr, n - 1) + arr[n - 1];
  }
}
//গুন করার জন্য
function multiply(arr, n) {
  let product = 1;
  for (let i = 0; i < n; i++) {
    product *= arr[i];
  }
  return product;
}

function multiply(arr, n) {
  if (n <= 0) {
    return 1;
  } else {
    return multiply(arr, n - 1) * arr[n - 1];
  }
}
// ========================================
//Profile Lookup
// Setup
const contacts = [
  {
    firstName: "Akira",
    lastName: "Laine",
    number: "0543236543",
    likes: ["Pizza", "Coding", "Brownie Points"],
  },
  {
    firstName: "Harry",
    lastName: "Potter",
    number: "0994372684",
    likes: ["Hogwarts", "Magic", "Hagrid"],
  },
  {
    firstName: "Sherlock",
    lastName: "Holmes",
    number: "0487345643",
    likes: ["Intriguing Cases", "Violin"],
  },
  {
    firstName: "Kristian",
    lastName: "Vos",
    number: "unknown",
    likes: ["JavaScript", "Gaming", "Foxes"],
  },
];

//1st option
function lookUpProfile(name, prop) {
  for (let x = 0; x < contacts.length; x++) {
    if (contacts[x].firstName === name) {
      if (contacts[x].hasOwnProperty(prop)) {
        return contacts[x][prop];
      } else {
        return "No such property";
      }
    }
  }
  return "No such contact";
}

// 2nd option
function lookUpProfile(name, prop) {
  // Only change code below this line

  for (let i = 0; i < contacts.length; i++) {
    if (contacts[i].firstName === name) {
      if (prop in contacts[i]) {
        return contacts[i][prop];
      } else {
        return "No such property";
      }
    }
  }
  return "No such contact";
  // Only change code above this line
}

console.log(lookUpProfile("Akira", "likes"));
// ========================================
//Record Collection
// Setup
const recordCollection = {
  2548: {
    albumTitle: 'Slippery When Wet',
    artist: 'Bon Jovi',
    tracks: ['Let It Rock', 'You Give Love a Bad Name']
  },
  2468: {
    albumTitle: '1999',
    artist: 'Prince',
    tracks: ['1999', 'Little Red Corvette']
  },
  1245: {
    artist: 'Robert Palmer',
    tracks: []
  },
  5439: {
    albumTitle: 'ABBA Gold'
  }
};

// Only change code below this line
// function updateRecords(records, id, prop, value) {
//   return records;
// }

//1st option
function updateRecords(records, id, prop, value) {
  if (value === "") {
    delete records[id][prop];
  } else if (prop !== "tracks" && value !== "") {
    records[id][prop] = value;
  } else if (prop === "tracks" && value !== "") {
    if (records[id].hasOwnProperty("tracks") === false) {
      records[id][prop] = [];
    }
    records[id][prop].push(value);
  }
  return records;
}

//2nd option
function updateRecords(records, id, prop, value) {
  if (value === '') {
    delete records[id][prop];
  } else if (prop === "tracks") {
    records[id][prop] = records[id][prop] || []; // shortcircuit evaluation
    records[id][prop].push(value);
  } else {
    records[id][prop] = value;
  }
  return records;
}

//3rd option
function updateRecords(records, id, prop, value) {
  // Access target album in record collection
  const album = records[id];
  // Update the album
  if (value === "") {
    delete album[prop];
  } else if (prop !== "tracks") {
    album[prop] = value;
  } else {
    album["tracks"] = album["tracks"] || [];
    album["tracks"].push(value);
  }
  // Return the full collection
  return records;
}

updateRecords(recordCollection, 5439, 'artist', 'ABBA');
// ========================================
// Problem 4: Create a function isPrime that takes a number as a parameter and returns true if it's a prime number, and false otherwise.
//======================================================================
function isPrime(number) {
  if (number <= 1) {
      return false; // 0 and 1 are not prime numbers
  }
  
  if (number <= 3) {
      return true; // 2 and 3 are prime numbers
  }

  if (number % 2 === 0 || number % 3 === 0) {
      return false; // Numbers divisible by 2 or 3 are not prime
  }

  for (let i = 5; i * i <= number; i += 6) {
      if (number % i === 0 || number % (i + 2) === 0) {
          return false; // If it's divisible by any number in the form 6k ± 1, it's not prime
      }
  }

  return true; // It's prime if not divisible by any of the above cases
}

// Example usage:
const numberToCheck = 17; // Replace with the number you want to check
const isItPrime = isPrime(numberToCheck);
console.log(`Is ${numberToCheck} a prime number? ${isItPrime}`);

// ========================================
// Problem 4: Create a function isPrime that takes a number as a parameter and returns true if it's a prime number, and false otherwise.
//======================================================================
function isPrime(number) {
  // Check if the number is less than 2 (not prime)
  if (number <= 1) {
    return false;
  }

  // Check for divisibility by numbers from 2 to the square root of the number
  for (let i = 2; i <= Math.sqrt(number); i++) {
    if (number % i === 0) {
      return false; // If the number is divisible, it's not prime
    }
  }

  return true; // If no divisors were found, the number is prime
}

// Get a number from the user and check if it's prime
const userNumber = parseInt(prompt("Enter a number:"));

if (!isNaN(userNumber)) {
  if (isPrime(userNumber)) {
    console.log(userNumber + " is a prime number.");
  } else {
    console.log(userNumber + " is not a prime number.");
  }
} else {
  console.log("Invalid input. Please enter a valid number.");
}

// ========================================
// Problem 7: Create a function removeDuplicates that takes an array and returns a new array with duplicates removed.
//======================================================================
function removeDuplicates(myNumbers) {
  const uniqueArray = [];
  
  for (const mySingleNum of myNumbers) {
      if (!uniqueArray.includes(mySingleNum)) {
          uniqueArray.push(mySingleNum);
      }
  }
  
  return uniqueArray;
}


const originalArray = [1, 2, 2, 3, 4, 4, 5];
console.log(removeDuplicates(originalArray));
//======================================================================