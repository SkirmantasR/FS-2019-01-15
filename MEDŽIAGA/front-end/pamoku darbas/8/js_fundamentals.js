

let squareContainer = document.querySelector('.js-square-container');

// Elementas sukuriamas kaip javascript objektas
let redSquare = document.createElement('div');
redSquare.className = 'square bg-red';
let greenSquare = document.createElement('div');
greenSquare.className = 'square bg-green';

// Elementas sukuriamas kaip tekstas atspindintis HTML elementą
let blueSquare = '<div class="square bg-blue"></div>';

let greenCopy = greenSquare.cloneNode(true);
console.log(greenSquare.outerHTML);
let greenCopy2 = document.createTextNode(greenSquare.outerHTML);

squareContainer.innerHTML += blueSquare;
// prieš pabaigą
squareContainer.appendChild(redSquare);
// pačiam priekį
squareContainer.insertBefore(greenCopy, squareContainer.firstChild);
// prieš elementą
squareContainer.parentElement.insertBefore(greenCopy2 , squareContainer);
// po elemento
squareContainer.parentElement.insertBefore(greenSquare, squareContainer.nextSibling);
$('.js-square-container').after( greenSquare);


console.log('redSquare');
console.log(redSquare);
console.log('blueSquare');
console.log(blueSquare);

greenSquare.classList.replace('bg-green','bg-red');

// Šalinimas iš DOM - document object model (elementų medis)
greenSquare.remove();
console.log(greenSquare)