console.table(cars);
console.table(students);

let carContainer = document.querySelector(".js-car-container");
let carManager = new ObjectManager("Car manager", cars, carContainer);

let studentContainer = document.querySelector(".js-student-container");
let studentManager = new ObjectManager("Student manager", students, studentContainer);