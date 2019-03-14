// ----------------Naudingi pavyzdžiai----------------------
// Masyvo deklaravimas
const masyvas = [64, -5, -2, 8, 1, 6.1, 4, 11.2, 98, 68, 12];
// Masyvo kopijavimas 
let masyvoKopija = masyvas.slice();
// Iteravimas per masyvą
for (let i = 0; i < masyvas.length; i++) {
  console.log(masyvas[i]);
}
// Reikšmių keitimas masyve pagal salygą
for (let i = 0; i < masyvas.length; i++) {
  if (true) { // vietoj 'true' turi būt salyga
    masyvas[i] = masyvas[i] + 10; // daro da patį kaip ↓
    masyvas[i] += 10; // prie esamos vertės prideda '10'
  } // masyvas[i] *= 2; padaugina elementą iš 2 
} // masyvas[i] %= 5; grąžina liekaną, padalinus iš 5
// Masyvo reikšmių ištraukimo, pridėjimo veiksmai:
masyvas.push(); // Įdeda į galą
masyvas.pop(); // Išiima iš galo
masyvas.unshift(); // Įdeda į priekį 
masyvas.shift(); // Išiima iš priekio
// Funkcijos deklaracija        ↓        ↓ įeinameji parametrai
function funkcijosPavadinimas(param1, param2) {
  let result = [param1 * 2, param2 ** 2] // Kažkokia logika
  return result; // Grąžinimas į iškvietimo vietą
}
// 'dėžutė' ↓  funkcijos invokacija(kvietinys)↓
let naujasKintamasis = funkcijosPavadinimas(5, 7); // [10, 49]
console.log(naujasKintamasis); // ← grąžintas rezultatas
