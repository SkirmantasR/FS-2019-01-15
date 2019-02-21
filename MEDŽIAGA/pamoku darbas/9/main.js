console.table(cars);

let carContainer = document.querySelector('.js-cars-container');
let carTable = document.createElement('table');
carTable.className = 'table';
let carTableHeader = `
<thead class="thead-dark">
  <tr>
    <th>Brand</th>
    <th>Model</th>
    <th>Year</th>
    <th>Engine Volume</th>
    <th></th>
  </tr>
</thead>`;
let tbody = document.createElement('tbody');

function render() {
  tbody.innerHTML = '';
  cars.forEach(el => {
    let row = document.createElement('tr');
    row.setAttribute('car-id', el.id);
    row.innerHTML = `
    <td>${el.brand}</td>  
    <td>${el.model}</td>  
    <td>${el.year}</td>  
    <td>${el.engineVolume}</td>`;

    let btnContainer = document.createElement('td');
    btnContainer.className = 'd-flex justify-content-between';

    let btnUpdate = document.createElement('button');
    btnUpdate.className = 'btn btn-warning';
    btnUpdate.innerHTML = 'Update';

    let btnDelete = document.createElement('button');
    btnDelete.className = 'btn btn-danger';
    btnDelete.innerHTML = 'Delete';

    btnUpdate.addEventListener('click', () => {
      console.log('Atnaujinta mašina su id:', el.id)
    });

    btnDelete.addEventListener('click', () => {
      deleteCar(el.id);
      render();
    });

    btnContainer.appendChild(btnUpdate);
    btnContainer.appendChild(btnDelete);
    row.appendChild(btnContainer);
    tbody.appendChild(row);
  });
}

function deleteCar(id) {
  for (let i = 0; i < cars.length; i++) {
    if (id == cars[i].id) {
      cars.splice(i, 1);
      break;
    }
  }
}

carTable.innerHTML += carTableHeader;

// elementų įdėjimas į DOM - pačioje pabaigoje
carTable.appendChild(tbody);
carContainer.appendChild(carTable);

render();































// ----------------------------------------------
function Car(name) {
  this.name = name || 'Volvo'; // || default value
  this.model = "S90";
  this.year = 2005;
  this.print = function () {
    console.log(this.name + " " + this.model + ". Production date: " +
      this.year + ".");
  }
}
var volvo = new Car('Volvo');
var volvo2 = new Car();

Car.prototype.sendToMarket = function () {
  return 8;
}
var volvo3 = new Car();
volvo.sendToMarket;
console.log(volvo);
console.log(volvo2);
console.log(volvo3);