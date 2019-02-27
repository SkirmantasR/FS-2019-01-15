console.table(data);
let container = document.querySelector('.js-container');

console.log(container);
console.dir(container);

let buttons = document.querySelectorAll('.container.my-5>button.btn');
buttons.forEach(button => {
  button.addEventListener('click', () => {
    console.log(button.classList);
  });
})





//  Else if --------------------------------------
// let age = prompt('What is your age?');

// if (age > 100 ) {
//   console.log('Kiba rekordą muši?');
// } else if (age > 80) {
//   console.log('Ką per Panoramą rodė?')
// } else if (age > 60) {
//   console.log('Tai ką, daboji anūkius?');
// } else if (age > 40) {
//   console.log('vidurinio amžiaus krizė jau baigės');
// } else {
//   console.log('Tavo gražiausi metai :)');
// }

// let lyja = 'false';
// let yraPinigu = true;

// if(!lyja && yraPinigu){
//   console.log('Mama varau į miestą');
// } else{
//   console.log('Pasedėsiu namie ir filmą pažiūrėsiu');
// }

// Iteracijos metodai

// // Atrinkimui
// let naujesnesUz1800 = data.filter(el => el.year > 1800);
// console.table(naujesnesUz1800);

// // Naujų duomenų formatavimui pagal iteruojamajį masyvą
// let metuMasyvas = data.map(element => element.year);
// console.table(metuMasyvas);

// let vidurkis = metuMasyvas.reduce((total, year) => total + year) / metuMasyvas.length;
// console.log(vidurkis);

// // Kiti veiksmai
// data.forEach(el => console.log('Pavadinimas', el.title));

// // Alternatyva su for
// for (let i = 0; i < data.length; i++) console.log('Pavadinimas', data[i].title);

// // Alternatyva su while
// {
//   let i = 0;
//   while (i < data.length) {
//     console.log('Pavadinimas', data[i++].title);
//   }
// }