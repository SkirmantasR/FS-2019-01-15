console.table(cars);

let carContainer = document.querySelector('.js-cars-container');
let noDataHeader = document.createElement('h1');
noDataHeader.className = 'text-danger text-center d-none';
noDataHeader.innerHTML = 'Nėra duomenų';
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
  if (cars.length !== 0) {
    carTable.className = 'table';
    noDataHeader.className = 'text-danger text-center d-none';
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
        let inputs = document.querySelectorAll('#saveCar [name]');
        inputs[0].value = el.brand;
        inputs[1].value = el.model;
        inputs[2].value = el.year;
        inputs[3].value = el.engineVolume;
        $('#updateCar').modal('show');
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
  } else {
    noDataHeader.classList.remove('d-none');
    carTable.classList.add('d-none');
  }
}

function deleteCar(id) {
  cars = cars.filter(el => el.id != id);
}

carTable.innerHTML += carTableHeader;

// elementų įdėjimas į DOM - pačioje pabaigoje
carTable.appendChild(tbody);
carContainer.appendChild(noDataHeader);
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