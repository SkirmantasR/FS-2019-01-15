// // išsaugoti reikšmę
// let a = 7; // Number
// let b = 'Raidžių darinys'; // String
// let c = true; // Bool - loginis operatorius
// // Spausdinimas Konsolėje
// console.log('Tektsu rašau: a + b');
// console.log(a + b);
// // Pranešimas vidurį lango
// alert('Jūsų pranešimas');
// // Įvedimas pranešime
// prompt('Labas, koks tavo vardas?');
// // Įvedimas ir išsaugojimas į kintamajį, vienu metu
// let ats = prompt('Labas, kiek tau metų?');
// // ---------------------------------------
// console.log('Hello world');
// alert('I love Javascript');
// alert('Ready to learn more?');
// let result = prompt('įveskite skaičių nuo 1 iki 10');
// console.log(result);

// console.log(prompt('įveskite skaičių nuo 1 iki 10'));

// if (confirm('ar tu vyras')) {
//   console.log('Varom alaus');
// } else {
//   console.log('Gal norėtum kavos?');
// }
// --------------------

a = prompt("įveskite A");
b = prompt("įveskite B");
if (!isNaN(a) && !isNaN(b)) {
  a = Number(a);
  b = Number(b)
  console.log('A = ' + a + ' B = ' + b);
  console.log('A + B =', + (a + b));
  console.log('A - B =', (a - b));
  console.log('A / B liekana:', + (a % b));
} else alert('Neteisingai įvedėte skaičius');