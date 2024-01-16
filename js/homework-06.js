// write a function that returns true if a number is even and false if a number is odd.

function evenOddChecker(myNumber) {
  // Check if myNumber is a valid number
  if (Number.isInteger(myNumber)) {
    // Check myNumber is even or odd
    if (myNumber % 2 === 0) {
      console.log(myNumber + " is an even number.");
      return true;
    } else {
      console.log(myNumber + " is an odd number.");
      return false;
    }
  } else {
    console.log(myNumber + " is  a/an " + typeof myNumber + " type data.");
    console.log(myNumber + " is not a/an Integer type data.");
    return "Please, input a valid Integer Number.";
  }
}

// // Check by input valid Integer even number like 78
// console.log(evenOddChecker(78));
// // Check by input valid Integer odd number like 85
// console.log(evenOddChecker(85));
// // Check by input invalid Integer number like 7.8
// console.log(evenOddChecker(7.8));
// // Check by input other data types like "Hello"
// console.log(evenOddChecker("Hello"));

// Create a function isLeapYear that takes a year as a parameter and returns true if it's a leap year or false if it's not.

function findLeapYear(myYear) {
  // Check if myYear is a valid integer
  if (Number.isInteger(myYear)) {
    // Check if myYear is a leap year
    if ((myYear % 4 === 0 && myYear % 100 !== 0) || myYear % 400 === 0) {
      console.log(myYear + " is a leap year.");
      return true;
    } else {
      console.log(myYear + " is not a leap year.");
      return false;
    }
  } else {
    return "Please, input a valid integer number.";
  }
}

// // Check by input valid integer like 2020
// console.log(findLeapYear(2020));
// // Check by input valid integer like 2023
// console.log(findLeapYear(2023));
// // Check by input invalid number like 2000.2
// console.log(findLeapYear(2000.2));
// // Check by input other data types like "Hello"
// console.log(findLeapYear("Hello"));

// Find the sum of the numbers from 1 to 10 (using loop and function).

function calcSerialNum(number1, number2) {
  //need to check valid number
  if (typeof number1 === "number" && typeof number2 === "number") {
    // if x < y
    if (number1 <= number2) {
      let x = number1;
      let y = number2;
      return calcSerialNumSum(x, y);
    } else {
      let x = number2;
      let y = number1;
      return calcSerialNumSum(x, y);
    }
    function calcSerialNumSum(x, y) {
      let sum = 0;
      let forPrint;

      //by for loop start
      for (i = x; i <= y; i++) {
        sum += i;
        forPrint = "The summation result from " + x + " to " + y + " = " + sum;
      }
      //by for loop end

      //by while loop start
      while (x <= y) {
        sum += x;
        forPrint = "The summation result from " + x + " to " + y + " = " + sum;
        x++;
      }
      //by while loop end

      //by d0...while loop start
      do {
        sum += x;
        forPrint = "The summation result from " + x + " to " + y + " = " + sum;
        x++;
      } while (x <= y);
      //by do...while loop end

      return forPrint;
    }
  } else {
    return "Please provide valid numbers.";
  }
}

//console.log(calcSerialNum(1, 10));

// Create a function calculateFactorial that takes a positive integer as a parameter and calculates and returns its factorial.

function calcFactNum(factNumber) {
  //need to check valid number
  if (typeof factNumber === "number") {
    if (factNumber < 1) {
      let x = factNumber;
      forPrint = "The factorial number of " + x + " is " + 1;
      return forPrint;
    } else {
      let x = factNumber;
      return calcFactNumSum(x);
    }
    function calcFactNumSum(x) {
      let sum = 1;
      let forPrint;

      //by for loop start
      for (i = x; i >= 1; i--) {
        sum *= i;
        forPrint = "The factorial number of " + x + " is " + sum;
      }
      //by for loop end

      //by while loop start
      //let i= x;
      while (x >= 1) {
        sum *= x;
        forPrint = "The factorial number of " + x + " is " + sum;
        x--;
      }
      //by while loop end

      //by d0...while loop start
      do {
        sum *= x;
        forPrint = "The factorial number of " + x + " is " + sum;
        x--;
      } while (x >= 1);
      //by do...while loop end

      return forPrint;
    }
  } else {
    return "Please provide valid numbers.";
  }
}

console.log(calcFactNum(10));
