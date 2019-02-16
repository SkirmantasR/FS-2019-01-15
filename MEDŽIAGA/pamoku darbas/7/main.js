"use strict";
// let array = [1, 2, 3, 5, 7, 11, 13, 17, 23, 31];

// for (let i = 0; i < array.length; i++) {
//   console.log('[' + i + '] => ' + array[i]);
// }

// // let i = 0;
// // while (i < array.length) {
// //   console.log('[' + i + '] => ' + array[i++]);
// // }

// array[5] = 5;

// for (let i = 0; i < array.length; i++) {
//   console.log('[' + i + '] => ' + array[i]);
// }

// //  Įdėti šio masyvo elementus į array masyvo galą,
// // naudojant push metodą
// let arrayEnd = [33, 37, 41, 47];

// // Skalbimas namie su tarka ir ūkiniu muilu
// for (let i = 0; i < arrayEnd.length; i++) {
//   array.push(arrayEnd[i]);
// }

// // Su skalbimo mašina
// array = array.concat(arrayEnd);

// console.log(array);

// //    Paimti 5 elementus iš array masyvo pradžios ir įdėti 
// // į naują masyvą
// let newArrayFront = [];
// for (let i = 0; i < 5; i++) { // Ciklas vykdomas 5 kartus
//   let shiftedFirstElement = array.shift();
//   newArrayFront.push(shiftedFirstElement);
// }
// console.log(array);
// console.log(newArrayFront);

// //    Paimti 5 elementus iš array masyvo galo ir įdėti 
// // į naują masyvą

// let newArrayEnd = [];
// for (let i = 0; i < 5; i++) { // Ciklas vykdomas 5 kartus
//   newArrayEnd.unshift(array.pop());
// }
// console.log(array);
// console.log(newArrayEnd);


// ---------------------- SPLICE ----------------------------------
let fruits1 = ['apple', 'banana', 'orange', 'grapes'];
let fruits2 = ['watermelon', 'strawberry', 'gooseberry', 'cherry'];
console.log('fruits1:');
console.log(fruits1);
console.log('fruits2:');
console.log(fruits2);

// Trynimas
console.log('Išpjovimas');
let deletedFruits = fruits2.splice(1, fruits2.length - 1);
console.log('fruits2(kas liko):');
console.log(fruits2);
console.log('deleted fruits(išpjova):');
console.log(deletedFruits);

// Pridėjimas
console.log('Pridėjimas');
fruits1.splice(fruits1.length, 0, ...fruits2);
console.log('fruits1:');
console.log(fruits1);

// Sukeitimas
console.log('Sukeitimas');
let newFruit = 'pineapple';
let splicedFruit = fruits1.splice(3, 1, newFruit);
console.log('fruits1:');
console.log(fruits1);
console.log('pakeistas vaisius:');
console.log(splicedFruit);
// ---------------------- SPLIT & JOIN -----------------------------

console.log('Split fruits');
let result = fruits1.join(', ');
console.log(window.location.href.split('/'));

// -------------------------- SORT --------------------------------
console.log(fruits1.sort().reverse());

let arr = [{
    name: 'Suzy',
    age: 18
  },
  {
    name: 'Piotr',
    age: 555
  },
  {
    name: 'Zandala',
    age: 6
  }
];

// Palyginimo funkcijos
function sortByName(a, b){
  if(a.name > b.name) return 1;  // 'a' prioritetas didesnis
  if(a.name < b.name) return -7; // 'a' prioritetas mazesnis
  return 0; // prioritetas lygūs
}

function sortByAge(a, b){
  return a.age - b.age;
}
let sortedByName = arr.sort(sortByName).slice();
let sortedByAge = arr.sort(sortByAge).slice();

console.log(sortedByName);
console.log(sortedByAge);






























// Jums to nereikia, kol kas. Bet gal ir nereiks niekad.
// --------------------
// function faktorial(x) {
//   if (x === 1) return 1;
//   return faktorial(x - 1) * x;
// }
//  console.log(faktorial(5));
//  console.log(faktorial(1));
//  console.log(faktorial(150));