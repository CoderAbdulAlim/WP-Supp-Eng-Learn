//এখানের 30 পর্যন্ত অনুশীলন করুন // https://www.freecodecamp.org/learn/javascript-alg

// Solve Those Problems

//1. Declare a variable called name and assign your name to it.

let name = "Abdul Alim";

//2. Create a variable age and assign your age to it.

let age = 37;

//3. Calculate the sum of two numbers, num1 and num2.

let num1 = 20;
let num2 = 23;

let sumNumbers = num1 + num2;

//4. Calculate the product of two numbers, num1 and num2.

let productNum1 = 34;

let productNum2 = 35;

let totalProduct = productNum1 + productNum2;

//5. Check if a number is even or odd. Create a variable isEven and assign true if the number is even, and false if it's odd.

let checkNumber = 8;

let isEven = checkNumber % 2;

if (isEven == 0) {
  console.log(checkNumber + " is even.");
} else {
  console.log(checkNumber + " is odd.");
}

//second option

let isEven = 6;

if (isEven % 2 == 0) {
  console.log(isEven + " is even.");
} else {
  console.log(isEven + " is odd");
}

//6. Create an array favoriteColors containing three favorite colors of yours.

let favoriteColors = ["White", "Blue", "Gray"];

let printColors = favoriteColors;

//7. Access and log the 2nd favorite color from the favoriteColors array.

let printColor = favoriteColors[1];

//8. Add a new color, "purple," to the favoriteColors array.
favoriteColors.push("Purple");

//9. Check if a given number is greater than 10. If it is, log "Greater than 10," otherwise, log "Less than or equal to 10."

let givenNumber = 11;

if (givenumber > 10) {
  printMessage = "Greater than 10.";
} else {
  printMessage = "Less than or equal to 10";
}

console.log(printMessage);

//10. Create a variable isRaining and assign true if it's raining, and false if it's not.

let isRaining = false;

let rainNow;

if (isRaining) {
  rainNow = "It's raining.";
} else {
  rainNow = "It's not raining.";
}

console.log(rainNow);

//11. Create a variable temperature and assign a value. Then, check if it's hot (greater than 30), warm (between 20 and 30), or cold (less than 20).

let temperature = 19;
let templlow;

if (temperature < 20) {
  tempNow = "It is cold weather.";
} else if (temperature < -30) {
  tempNow = "It is warm weather.";
} else {
  tempNow = "It is hot weather.";
}

console.log(tempNow);

//12. Calculate the area of a rectangle with a given width and height.

let width = "10cm";
let height = "20cm";

width = parseFloat(width);
height = parseFloat(height);

let calcArea = width * height;

console.log(calcArea + "scm");

// Second option
let width = 10;
let height = 20;

let calcArea = width * height;

console.log(calcArea);

//13. Create an array favoriteFruits containing five favorite fruits of yours.

let favoriteFruits = ["Mango", "Bannana", "Jack Fruit", "Lichi", "Pineapple"];

//14. Access and log the 3rd favorite fruit from the favoriteFruits array.

let printFruitName = favoriteFruits[2];

//15. Add a new favorite fruit, "grape," to the favoriteFruits array.

favoriteFruits.push("Grape");

console.log(favoriteFruits);

//16. Check if a student's score is greater than or equal to 70. If it is, log "Pass," otherwise, log "Fail."

let studentScore = 69;
let resultCard;

if (studentScore >= 70) {
  resultCard = "Successfully pass.";
} else {
  resultCard = "Fail.";
}
console.log(resultCard);

//17. Create an array of three favorite movies.

let favoriteMovies = [
  "Mohammad, Messenger of God",
  "Children of Heaven",
  "Border Terrorism",
];

//18. Access and log the 2nd favorite movie from the favoriteMovies array.

let printMovieName = favoriteMovies[1];
