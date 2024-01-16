/**
  এখানের 100% পর্যন্ত অনুশীলন করুন
  https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/
 
*/
//=> Solve Those Problems 

// Problem 1: Create a function greet that takes a name as a parameter and returns a greeting message.

function welcome(name) {
    if (name === "") {
      return "Please, write your full name.";
    } else {
      return "Welcome, " + name;
    }
  }
  
  console.log(welcome("Abdul Alim"));
  
  
  // Problem 2: Create a function add that takes two numbers as parameters and returns their sum.
  
  function mysumCalculator(num1,num2){
    if(num1 === "" || num2 === ""){
      return "Please, enter two number.";
    }else{
      let sum = num1+num2;
      return "Result of " + num1 + " and " + num2 + " = " + sum;
    }
  }
  
  console.log(mysumCalculator(8,5));
  
  // Problem 3: Create an object person with properties name and age.
  
  const personalInfo = {
    name  : "Abdul Alim",
    age   : 37
  }
  
  
  // Problem 4: Create a function isAdult that takes a person object as a parameter and returns true if the person's age is 18 or older, and false otherwise.
  
  function isAdult(age){
    if(age != "" && age >= 18){
      return true;
    }else{
      return false;
    }
  }
  
  console.log(isAdult(19));
  
  // Problem 5: Create a function getFullName that takes a person object as a parameter and returns their full name.
  
  const personalDetail = {
    fullname: ""
  };
  
  function getFullName(yourname) {
    if (yourname !== "") {
      personalDetail.fullname = yourname; // Set the fullname directly
      return personalDetail.fullname;
    } else {
      return "Please, Enter your full name.";
    }
  }
  
  console.log(getFullName("Abdul Alim"));
  console.log(personalDetail);
  
  // Problem 6: Create a function calculateArea that takes the width and height of a rectangle as parameters and returns its area.
  
  function calculateArea(width, height) {
    if (typeof width !== 'number' || typeof height !== 'number') {
      return "Please enter valid numbers.";
    } else if (width === 0 || height === 0) {
      return "Width and height must be non-zero.";
    } else {
      let area = width * height;
      return area;
    }
  }
  
  console.log(calculateArea(5.5, 6.2));   // Output: 34.1
  console.log(calculateArea(3, 4));       // Output: 12
  console.log(calculateArea(0, 4));       // Output: "Width and height must be non-zero."
  console.log(calculateArea("foo", "bar")); // Output: "Please enter valid numbers."
  
  // Problem 7: Create an object book with properties title, author, and year.
  
  const bookInfo = {
    title: "",
    author: "",
    year: ""
  };
  
  // Problem 8: Create a function getBookInfo that takes a book object as a parameter and returns a string with its title, author, and year.
  
  const bookInfo = {
    title: "",
    author: "",
    year: ""
  };
  
  function getBookInfo(inTitle, inAuthor, inYear) {
    if (inTitle !== "" || inAuthor !== "" || inYear !== "") {
      bookInfo.title = inTitle;
      bookInfo.author = inAuthor;
      bookInfo.year = inYear;
      return bookInfo;
    } else {
      return "Please, enter Book Name, Author Name, and Published Year.";
    }
  }
  
  console.log(getBookInfo("The Great Gatsby", "F. Scott Fitzgerald", 1925));
  console.log(bookInfo);
  
  // Problem 9: Create an object student with properties name and grade. Create a function promoteStudent that takes a student object as a parameter and increases their grade by 1.
  
  // এখানে, প্রবলেম এর বাংলা অনুবাদ আমি যা বুঝেছি, সে হিসেবে একটা অবজেক্ট তৈরি করতে হবে। আরেকটা ফাংশন তৈরি করতে হবে। ফাংশনে গ্রেড ইনক্রিজ করতে হবে।
  // Create the student object
  const student = {
    name: "John",
    grade: 10
  };
  
  // Define the promoteStudent function
  function promoteStudent(studentObj) {
    studentObj.grade++; // Increase the grade by 1
  }
  
  // Call the promoteStudent function to promote the student
  promoteStudent(student);
  
  // Display the updated grade
  console.log(student.grade); // Output: 11
  
  
  // Problem 10: Create an object circle with a property radius. Create a function calculateArea that takes the circle object as a parameter and calculates and returns its area.
  
  // Create the circle object
  const circle = {
    radius: 5 // You can set the radius to any value you want
  };
  
  // Define the calculateArea function manually
  function calculateArea(circleObj) {
    const radius = circleObj.radius;
    const area = 3.14159 * (radius * radius); // An approximation of π
    return area;
  }
  
  // Define the calculateArea function math function
  function calculateArea(circleObj) {
    const area = Math.PI * Math.pow(circleObj.radius, 2);
  }
  
  // Call the calculateArea function to get the area
  const area = calculateArea(circle);
  
  // Display the calculated area
  console.log("The area of the circle is: " + area.toFixed(2));
  